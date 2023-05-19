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

        $errors = array();

        $user = new User();
        $classes = new Classes_model();

        $row = $classes->whereOne('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];

        if($row) {
            $crumbs[] = [$row->class, "single-class/?$row->class_id"];
        }

        $page_tab = isset($_GET['tab']) ? $_GET['tab'] : 'teachers';
        $teach = new Teachers_model();

        $results = false;
        if($page_tab == 'teacher-add' && count($_POST) > 0) {

           if(isset($_POST['search'])) {

                // find teacher
                $user = new User();
                $name = "%".trim($_POST['name'])."%";
                $query = "SELECT * FROM users WHERE (firstname LIKE :fname || lastname LIKE :lname) && rank = 'teacher' LIMIT 10";
                $results = $user->query($query, ['fname'=>$name, 'lname'=>$name]);
            }else
            if(isset($_POST['selected'])){

                //add teacher
				$query = "select id from class_teachers where user_id = :user_id && class_id = :class_id && disabled = 0 limit 1";

				if($page_tab == 'teacher-add'){

					if(!$teach->query($query,[
						'user_id' => $_POST['selected'],
						'class_id' => $id,
					])){

						$arr = array();
		 				$arr['user_id'] 	= $_POST['selected'];
		 				$arr['class_id'] 	= $id;
						$arr['disabled'] 	= 0;
						$arr['date'] 		= date("Y-m-d H:i:s");

						$teach->insert($arr);

						$this->redirect('single_class/'.$id.'?tab=teachers');

					}else{
						$errors[] = "That teacher already belongs to this class";
					}
				}
            }


        }else
		if($page_tab == 'teachers'){

			//display teachers
			$query = "select * from class_teachers where class_id = :class_id && disabled = 0";
			$teachers = $teach->where('class_id', $id);

			$data['teachers'] 		= $teachers;
		}

        $data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
        $data['errors'] 	= $errors;

		$this->view('single-class',$data);
    }
}
