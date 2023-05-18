<?php

/**
 * classes controller
 */
class Classes extends Controller
{
    function index() {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $classes = new Classes_model();

        $data = $classes->findAll();

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];

        $this->view('classes', [
            'rows'=>$data,
            'crumbs'=>$crumbs,
        ]);
    }

    function add() {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $errors = array();

        if(count($_POST) >0) {

            $classes = new Classes_model();
            if($classes->validate($_POST)) {

                $_POST['date'] = date("Y-m-d H:i:s");

                $classes->insert($_POST);
                $this->redirect("classes");
            }else {
                $errors = $classes->errors;
            }

        }

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Add', 'classes/add'];

        $this->view('classes.add', [
            'errors'=>$errors,
            'crumbs'=>$crumbs,
        ]);
    }

    function edit($id = null) {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $errors = array();
        $classes = new Classes_model();

        if(count($_POST) >0) {
            if($classes->validate($_POST)) {

                $classes->update($id, $_POST);
                $this->redirect("classes");
            }else {
                $errors = $classes->errors;
            }

        }

        $row = $classes->where('id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Edit', 'classes/edit'];

        $this->view('classes.edit', [
            'row'=>$row,
            'errors'=>$errors,
            'crumbs'=>$crumbs,

        ]);
    }

    function delete($id = null) {

        if(!Auth::logged_in()) {

            $this->redirect('/login');
        }

        $errors = array();
        $classes = new Classes_model();

        if(count($_POST) >0) {

            $classes->delete($id, $_POST);
            $this->redirect("classes");

        }

        $row = $classes->where('id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Delete', 'classes/delete'];
        $this->view('classes.delete', [
            'row'=>$row,
            'errors'=>$errors,
            'crumbs'=>$crumbs,

        ]);
    }
}
