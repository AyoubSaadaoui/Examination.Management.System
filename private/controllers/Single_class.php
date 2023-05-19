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

		if($page_tab == 'teachers'){

			//display teachers
			$query = "select * from class_teachers where class_id = :class_id && disabled = 0";
			$teachers = $teach->query($query,['class_id'=>$id]);

			$data['teachers'] 		= $teachers;
		}

        $data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
        $data['errors'] 	= $errors;

		$this->view('single-class',$data);
    }

	public function teacheradd($id = '')
	{

		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$classes = new Classes_model();
		$row = $classes->whereOne('class_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['classes','classes'];

		if($row){
			$crumbs[] = [$row->class,''];
		}

		$page_tab = 'teacher-add';
		$teach = new teachers_model();

		$results = false;

		if(count($_POST) > 0)
		{

			if(isset($_POST['search'])){

				if(trim($_POST['name']) != ""){

					//find teacher
					$user = new User();
					$name = "%".trim($_POST['name'])."%";
					$query = "select * from users where (firstname like :fname || lastname like :lname) && rank = 'teacher' limit 10";
					$results = $user->query($query,['fname'=>$name,'lname'=>$name,]);
				}else{
					$errors[] = "please type a name to find";
				}

			}else
			if(isset($_POST['selected'])){

				//add teacher
				$query = "select id from class_teachers where user_id = :user_id && class_id = :class_id && disabled = 0 limit 1";

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
					$errors[] = "that teacher already belongs to this class";
				}

			}

		}

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;

		$this->view('single-class',$data);
	}

	public function teacherremove($id = '')
	{

		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$classes = new Classes_model();
		$row = $classes->whereOne('class_id',$id);


		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['classes','classes'];

		if($row){
			$crumbs[] = [$row->class,''];
		}

		$page_tab = 'teacher-remove';
		$teach = new teachers_model();

		$results = false;

		if(count($_POST) > 0)
		{

			if(isset($_POST['search'])){

				if(trim($_POST['name']) != ""){

					//find teacher
					$user = new User();
					$name = "%".trim($_POST['name'])."%";
					$query = "select * from users where (firstname like :fname || lastname like :lname) && rank = 'teacher' limit 10";
					$results = $user->query($query,['fname'=>$name,'lname'=>$name,]);
				}else{
					$errors[] = "please type a name to find";
				}

			}else
			if(isset($_POST['selected'])){

				//add teacher
				$query = "select id from class_teachers where user_id = :user_id && class_id = :class_id && disabled = 0 limit 1";

				if($row = $teach->query($query,[
					'user_id' => $_POST['selected'],
					'class_id' => $id,
				])){

					$arr = array();
						$arr['disabled'] 	= 1;

					$teach->update($row[0]->id,$arr);

					$this->redirect('single_class/'.$id.'?tab=teachers');

				}else{
					$errors[] = "that teacher was not found in this class";
				}

			}

		}

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;

		$this->view('single-class',$data);
	}
}
