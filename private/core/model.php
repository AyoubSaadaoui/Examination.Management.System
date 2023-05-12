<?php

/**
 * main model
 */
class Model extends Database {

    protected $table = "users";

    function __construct() {

    }

    public function where($column, $value) {

        $query = "SELECT * FROM $this->table WHERE :column = :value";
        
        return $this->query($query, ['column'=>$column, 'value'=>$value]);
    }

}