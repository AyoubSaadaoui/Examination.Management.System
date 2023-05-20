<?php

/**
 * login controller
 */
class Login extends Controller
{
    function index() {

        $errors = array();

        if(count($_POST) > 0) {

            $user = new User();
            // check email is exist
            $row = $user->where('email', $_POST['email']);
            if($row) {

                $row = $row[0];
                // check password
                if(password_verify($_POST['password'], $row->password)){

                    // get school name
                    $school = new School();
 					$school_row = $school->whereOne('school_id',$row->school_id);
 					$row->school_name = $school_row->school;

                    Auth::authenticate($row);
                    $this->redirect('/home');
                }

            }
            $errors['email'] = "Wrong email or password";
        }

        // controller views
        $this->view("login", ['errors'=>$errors]);
    }
}
