<?php

/**
 * profile controller
 */
class Profile extends Controller
{
    function index($id = '') {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $user = new User();
        $id = trim($id == '') ? Auth::getUser_id() : $id;

        $row = $user->whereOne('user_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Staff', 'users'];
        $crumbs[] = ['Profile', 'profile'];
        if($row) {
            $crumbs[] = [$row->rank, 'profile'];
        }

        //get more info depending on tab
		$data['page_tab'] = isset($_GET['tab']) ? $_GET['tab'] : 'info';

		$data['row'] = $row;
		$data['crumbs'] = $crumbs;

		$this->view('profile',$data);
    }
}
