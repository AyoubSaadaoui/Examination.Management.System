<?php

/**
 * Classes model
 */
class Classes_model extends Model{

    protected $table = 'classes';

    protected $allowedColumns = [
        'class',
        'date',
    ];

    protected $beforeInsert = [
        'make_school_id',
        'make_class_id',
        'make_user_id',
    ];

    protected $afterSelect = [
        'get_user',
    ];


    function validate($DATA) {

        $this->errors = array();

        // Check for class name
        if(empty($DATA['class']) || !preg_match('/^[a-zA-Z\w ]+$/', $DATA['class']) ) {

            $this->errors['class'] = "No spaces allowed in class name";
        }

        // Check if class exists
        if($this->where('class', $DATA['class'])) {

            $this->errors['class'] = "This class already exists";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_school_id($data) {

        // type : varchar(60)
        if(isset($_SESSION['USER']->school_id)) {

            $data['school_id'] = $_SESSION['USER']->school_id;
        }

        return $data;
    }

    public function make_user_id($data) {

        // type : varchar(60)
        if(isset($_SESSION['USER']->user_id)) {

            $data['user_id'] = $_SESSION['USER']->user_id;
        }

        return $data;
    }

    public function make_class_id($data) {


        $data['class_id'] = random_string(60);

        return $data;
    }


    public function get_user($data) {

        $user = new User();
        foreach($data as $key => $row) {

            $result = $user->where('user_id', $row->user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false;
        }

        return $data;
    }





}
