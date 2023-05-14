<?php

/**
 * School model
 */
class School extends Model{

    protected $allowedColumns = [
        'school',
        'date',
    ];

    protected $beforeInsert = [
        'make_school_id',
        'make_user_id',
    ];


    function validate($DATA) {

        $this->errors = array();

        // Check for school name
        if(empty($DATA['school']) || !preg_match('/^[a-zA-Z]+$/', $DATA['school']) ) {

            $this->errors['school'] = "Only letters allowed in school name";
        }

        // Check if school exists
        if($this->where('school', $DATA['school'])) {

            $this->errors['school'] = "This school already exists";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data) {

        // type : varchar(60)
        if(isset($_SESSION['USER']->school_id)) {

            $data['user_id'] = $_SESSION['USER']->user_id;
        }

        return $data;
    }

    public function make_school_id($data) {


        $data['school_id'] = random_string(60);

        return $data;
    }





}
