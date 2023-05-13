<?php

/**
 * user model
 */
class User extends Model{

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];


    function validate($DATA) {

        $this->errors = array();

        // Check for first name
        if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname']) ) {

            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        // Check for last name
        if(empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname']) ) {

            $this->errors['lastname'] = "Only letters allowed in last name";
        }

        // Check for email
        if(empty($DATA['email']) || !filter_var( $DATA['email'], FILTER_VALIDATE_EMAIL) ) {

            $this->errors['email'] = "Email is not valid";
        }

        // Check for gender
        $genders = ['male', 'female'];
        if(empty($DATA['gender']) || !in_array($DATA['gender'], $genders) ) {

            $this->errors['gender'] = "Gender is not valid";
        }

        // Check for rank
        $ranks = ['student', 'reception', 'teacher', 'admin', 'super_admin'];
        if(empty($DATA['rank']) || !in_array($DATA['rank'], $ranks) ) {

            $this->errors['rank'] = "Rank is not valid";
        }

        // Check for password
        if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {

            $this->errors['password'] = "The password do not match";
        }
        // Check for password length
        if(strlen($DATA['password']) < 8) {

            $this->errors['password'] = "Password must be at least 8 characters long";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data) {

        // type : varchar(60)
        $data['user_id'] = $this->random_string(60);

        return $data;
    }

    public function make_school_id($data) {

        if(isset($_SESSION['USER']->school_id)) {

            $data['school_id'] = $_SESSION['USER']->school_id;
        }

        return $data;
    }

    public function hash_password($data) {

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $data;
    }

    private function random_string($length) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $id = '';

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, strlen($characters) - 1);
            $id .= $characters[$random];
        }

        return $id;
    }


}
