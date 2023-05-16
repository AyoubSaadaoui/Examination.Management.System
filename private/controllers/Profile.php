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
        $row = $user->whereOne('user_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Staff', 'users'];
        $crumbs[] = ['Profile', 'profile'];
        if($row) {
            $crumbs[] = [$row->rank, 'profile'];
        }

        $this->view("profile", [
            'row' => $row,
            'crumbs'=>$crumbs,
        ]);
    }
}
