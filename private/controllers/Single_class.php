<?php

/**
 * Single_class controller
 */
class Single_class extends Controller
{
    function index($id = '') {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $user = new User();
        $classes = new Classes_model();

        $row = $classes->whereOne('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];

        if($row) {
            $crumbs[] = [$row->class, "single-class/?$row->class_id"];
        }

        $page_tab = isset($_GET['tab']) ? $_GET['tab'] : 'lecturers';

        $this->view("single-class", [
            'row' => $row,
            'crumbs'=>$crumbs,
            'page_tab'=>$page_tab,
        ]);
    }
}
