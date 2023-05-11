<?php

/**
 * home controller
 */
class Home extends Controller
{
    function index() {

        // controller views
        echo $this->view("home");
    }
}
