<?php

/**
 * login controller
 */
class Login extends Controller
{
    function index() {

        // controller views
        echo $this->view("login");
    }
}
