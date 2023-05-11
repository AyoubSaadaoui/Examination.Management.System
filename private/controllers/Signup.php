<?php

/**
 * signup controller
 */
class Signup extends Controller
{
    function index() {

        // controller views
        echo $this->view("signup");
    }
}
