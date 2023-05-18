<?php

/**
 * signup controller
 */
class Signup extends Controller
{
    function index() {

        $errors = array();

        // for rank select
        $mode = isset($_GET['mode']) ? $_GET['mode'] : '';

        if(count($_POST) >0) {
            $user = new User();

            if($user->validate($_POST)) {


                $_POST['date'] = date("Y-m-d H:i:s");

                $user->insert($_POST);
                $redirect = $mode == 'student' ? 'students' : 'users';
                $this->redirect($redirect);
            }else {
                $errors = $user->errors;
            }
        }

        $this->view("signup", [
            'errors'=>$errors,
            'mode'=>$mode,
        ]);
    }
}
