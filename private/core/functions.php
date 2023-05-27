<?php

function get_var($key, $default = "") {

    if(isset($_POST[$key])) {

        return $_POST[$key];
    }

    return $default;
}

function get_selected($key, $value) {

    if(isset($_POST[$key])) {

        if($_POST[$key] == $value) {

            return "selected";
        }

        return "";
    }
}

function esc($var) {

    return htmlspecialchars($var);
}

function random_string($length) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = '';

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, strlen($characters) - 1);
        $id .= $characters[$random];
    }

    return $id;
}

function get_date($date) {

    return date("jS M, Y", strtotime($date));
}

// for testing
function schow($data) {

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function get_image($image, $gender = 'male') {

    if(!file_exists($image)) {
        $image = ASSETS."/user_male.png";
        if($gender == 'female') {
          $image = ASSETS."/user_female.png";
        }
    }else
    {
        $class = new Image();
 		$image = ROOT . "/" . $class->profile_thumb($image);
    }

    return $image;
}

function views_path($view)
{
	if(file_exists("../private/views/" . $view . ".inc.php")) {
		return ("../private/views/" . $view . ".inc.php");
	}else{
		return ("../private/views/404.view.php");
	}
}

function upload_image($FILES)
{
	if(count($FILES) > 0)
	{

		//we have an image
		$allowed[] = "image/jpeg";
		$allowed[] = "image/png";

		if($FILES['image']['error'] == 0 && in_array($FILES['image']['type'], $allowed))
		{
			$folder = "uploads/";
			if(!file_exists($folder)){
				mkdir($folder,0777,true);
			}
			$destination = $folder . time() . "_" . $FILES['image']['name'];
			move_uploaded_file($FILES['image']['tmp_name'], $destination);
			return $destination;
		}

	}

	return false;
}

function has_taken_test($test_id)
{

	return "No";
}

function can_take_test($my_test_id)
{
	$class = new Classes_model();
	$mytable = "class_students";
	if(Auth::getRank() != "student"){
		return false;
	}

	$query = "select * from $mytable where user_id = :user_id && disabled = 0";
	$data['stud_classes'] = $class->query($query,['user_id'=>Auth::getUser_id()]);

	$data['student_classes'] = array();
	if($data['stud_classes']){
		foreach ($data['stud_classes'] as $key => $arow) {
			// code...
			$data['student_classes'][] = $class->whereOne('class_id',$arow->class_id);
		}
	}

	//collect class id's
	$class_ids = [];
	foreach ($data['student_classes'] as $key => $class_row) {
		// code...
		$class_ids[] = $class_row->class_id;
	}

	$id_str = "'" . implode("','", $class_ids) . "'";
	$query = "select * from tests where class_id in ($id_str)";

	$tests_model = new Tests_model();
	$tests = $tests_model->query($query);

	$my_tests = array_column($tests, 'test_id');
	if(in_array($my_test_id, $my_tests)){
		return true;
	}
	return false;
}
