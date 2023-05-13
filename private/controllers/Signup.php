<?php

/**
 * signup controller
 */
class Signup extends Controller
{
    function index() {

        $errors = array();

        if(count($_POST) >0) {
            $user = new User();

            if($user->validate($_POST)) {
                $this->redirect("login");
            }else {
                $errors = $user->errors;
            }
        }

        $this->view("signup", ['errors'=>$errors]);
    }
}
