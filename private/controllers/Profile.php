<?php

/**
 * profile controller
 */
class Profile extends Controller
{
    function index() {

        // controller views
        echo $this->view("profile");
    }
}
