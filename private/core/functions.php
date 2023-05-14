<?php

function get_var($key) {

    if(isset($_POST[$key])) {

        return $_POST[$key];
    }

    return "";
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
