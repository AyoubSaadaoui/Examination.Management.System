<?php

/**
 * home controller
 */
class Home extends Controller
{
    function index() {

        $user = new User();

        // $data = $user->where('firstname', 'Ayoub');

        $data = $user->findAll();

        $this->view('home', ['rows'=>$data]);
    }
}
