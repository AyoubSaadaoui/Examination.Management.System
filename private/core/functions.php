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
