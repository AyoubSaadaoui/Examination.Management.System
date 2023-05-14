<?php

/**
 * schools controller
 */
class Schools extends Controller
{
    function index() {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $school = new School();

        // $data = $user->where('firstname', 'Ayoub');

        $data = $school->findAll();

        $this->view('Schools', ['rows'=>$data]);
    }
}
