<?php

/**
 * single test controller
 */
class Single_test extends Controller
{

	public function index($id = '')
	{
		// code...
		$errors = array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$tests = new tests_model();
		$row = $tests->whereOne('test_id',$id);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['tests','tests'];

		if($row){
			$crumbs[] = [$row->test,''];
		}

		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

		$page_tab = isset($_GET['tab']) ? $_GET['tab'] : 'view';

		$results = false;

		$data['row'] 		= $row;
 		$data['crumbs'] 	= $crumbs;
		$data['page_tab'] 	= $page_tab;
		$data['results'] 	= $results;
		$data['errors'] 	= $errors;
		$data['pager'] 		= $pager;

		$this->view('single-test',$data);
	}
}