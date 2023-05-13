<?php

/**
 * user model
 */
class User extends Model{

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

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

}
