<?php

/**
 * take test controller
 */
class Take_test extends Controller
{

	public function index($id = '')
	{
		// code...
		$errors = array();
		if(!Auth::access('student'))
		{
			$this->redirect('access_denied');
		}

		$tests = new Tests_model();
		$row = $tests->whereOne('test_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['tests','tests'];

		if($row){
			$crumbs[] = [$row->test,''];

			if(!$row->disabled){

				$query = "update tests set editable = 0 where id = :id limit 1";
				$tests->query($query,['id'=>$row->id]);
			}
		}

		$page_tab = 'view';

		//if something was posted
		if(count($_POST) > 0)
		{
			//save answers to database

			foreach ($_POST as $key => $value) {
				// code...
				if(is_numeric($key)){

					//save
					$arr['user_id']     = Auth::getUser_id();
			        $arr['question_id'] = $key;
			        $arr['date']        = date("Y-m-d H:i:s");
			        $arr['test_id']     = $id;
			        $arr['answer']      = trim($value);

					//check if answer already exists
					$query = "select id from answers where user_id = :user_id && test_id = :test_id && question_id = :question_id limit 1";
					$check = $answers->query($query,[
						'user_id' => $arr['user_id'],
						'test_id' => $arr['test_id'],
						'question_id' => $arr['question_id'],
					]);

					if(!$check)
					{
						$answers->insert($arr);

					}
				}
			}

			$this->redirect('take_test/'.$id);
		}

		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

		$results = false;
		$quest = new Questions_model();
		$questions = $quest->where('test_id',$id,'asc');

		$total_questions = is_array($questions) ? count($questions) : 0;

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['questions'] 	= $questions;
		$data['total_questions'] 	= $total_questions;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;
		$data['pager'] 		= $pager;

		$this->view('take-test',$data);
	}

	public function addquestion($id = '')
	{
		// code...
		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$tests = new Tests_model();
		$row = $tests->whereOne('test_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['tests','tests'];

		if($row){
			$crumbs[] = [$row->test,''];
		}

		$page_tab = 'add-question';

		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

 		$quest = new Questions_model();
 		if(count($_POST) > 0){

 			if($quest->validate($_POST))
 			{

 				//check for files
 				if($myimage = upload_image($_FILES))
 				{
 					$_POST['image'] = $myimage;
 				}

 				$_POST['test_id'] = $id;
 				$_POST['date'] = date("Y-m-d H:i:s");

 				if(isset($_GET['type']) && $_GET['type'] == "multiple"){
 					$_POST['question_type'] = 'multiple';
 					//for multiple choice
 					$num = 0;
 					$arr = [];
			        $letters = ['A','B','C','D','F','G','H','I','J'];
			        foreach ($_POST as $key => $value) {
			            // code...
			            if(strstr($key, 'choice')){

			                $arr[$letters[$num]] = $value;
			                $num++;
			            }
			        }

			        $_POST['choices'] = json_encode($arr);
 				}else
 				if(isset($_GET['type']) && $_GET['type'] == "objective"){
 					$_POST['question_type'] = 'objective';
 				}else{
 					$_POST['question_type'] = 'subjective';
 				}

 				$quest->insert($_POST);
 				$this->redirect('single_test/'.$id);
 			}else
 			{
 				//errors
 				$errors = $quest->errors;
 			}
 		}

		$results = false;

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;
		$data['pager'] 		= $pager;

		$this->view('single-test',$data);
	}

	public function editquestion($id = '',$quest_id = '')
	{
		// code...
		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$tests = new Tests_model();
		$row = $tests->whereOne('test_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['tests','tests'];

		if($row){
			$crumbs[] = [$row->test,''];
		}

		$page_tab = 'edit-question';

		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

 		$quest = new Questions_model();
 		$question = $quest->whereOne('id',$quest_id);

 		if(count($_POST) > 0){

 			if($quest->validate($_POST))
 			{

 				//check for files
 				if($myimage = upload_image($_FILES))
 				{
 					$_POST['image'] = $myimage;
 					if(file_exists($question->image)){
	 					unlink($question->image);
	 				}
 				}

 				//check the question type
			  	$type = '';
			  	if(isset($_GET['type']) && $_GET['type'] == "multiple"){
 					$_POST['question_type'] = 'multiple';
 					//for multiple choice
 					$num = 0;
 					$arr = [];
			        $letters = ['A','B','C','D','F','G','H','I','J'];
			        foreach ($_POST as $key => $value) {
			            // code...
			            if(strstr($key, 'choice')){

			                $arr[$letters[$num]] = $value;
			                $num++;
			            }
			        }

			        $_POST['choices'] = json_encode($arr);
			        $type = '?type=multiple';
 				}else
		    	if($question->question_type == 'objective'){
		    		$type = '?type=objective';
		    	}

 				$quest->update($question->id,$_POST);
 				$this->redirect('single_test/editquestion/'.$id.'/'.$quest_id.$type);
 			}else
 			{
 				//errors
 				$errors = $quest->errors;
 			}
 		}

		$results = false;

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;
		$data['pager'] 		= $pager;
		$data['question'] 	= $question;

		$this->view('single-test',$data);
	}

	public function deletequestion($id = '',$quest_id = '')
	{
		// code...
		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$tests = new Tests_model();
		$row = $tests->whereOne('test_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['tests','tests'];

		if($row){
			$crumbs[] = [$row->test,''];
		}

		$page_tab = 'delete-question';

		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

 		$quest = new Questions_model();
 		$question = $quest->whereOne('id',$quest_id);

 		if(count($_POST) > 0){

 			if(Auth::access('lecturer'))
 			{

 				$quest->delete($question->id);
 				if(file_exists($question->image)){
 					unlink($question->image);
 				}
 				$this->redirect('single_test/'.$id);
 			}
 		}

		$results = false;

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;
		$data['pager'] 		= $pager;
		$data['question'] 	= $question;

		$this->view('single-test',$data);
	}



}