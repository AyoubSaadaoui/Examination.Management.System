<?php

/**
 * students controller
 */
class Students extends Controller
{
    function index() {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $user = new User();

        $school_id = Auth::getSchool_id();
        $data = $user->query("SELECT * FROM users WHERE school_id = :school_id && rank in ('student') ORDER BY id DESC ", ['school_id'=>$school_id]);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Students', 'students'];

        if(Auth::access('reception')){
			$this->view('students',[
				'rows'=>$data,
				'crumbs'=>$crumbs,
			]);
		}else{
			$this->view('access-denied');
		}
    }
}
