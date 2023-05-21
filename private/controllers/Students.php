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

 		$query = "select * from users where school_id = :school_id && rank in ('student') order by id desc";
 		$arr['school_id'] = $school_id;

 		if(isset($_GET['find']))
 		{
 			$find = '%' . $_GET['find'] . '%';
 			$query = "select * from users where school_id = :school_id && rank in ('student') && (firstname like :find || lastname like :find) order by id desc";
 			$arr['find'] = $find;
 		}

		$data = $user->query($query,$arr);

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
