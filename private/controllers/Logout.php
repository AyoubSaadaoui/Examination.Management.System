<?php

/**
 * logout controller
 */
class Logout extends Controller
{
    function index() {

        Auth::logout();
        $this->redirect('/login');

    }
}
