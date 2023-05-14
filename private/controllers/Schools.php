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

        $data = $school->findAll();

        $this->view('Schools', ['rows'=>$data]);
    }

    function add() {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }


        $school = new School();
        $errors = array();

        $data = $school->findAll();

        $this->view('Schools.add', ['errors'=>$errors]);
    }
}
