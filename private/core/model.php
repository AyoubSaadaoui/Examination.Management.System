<?php

/**
 * main model
 */
class Model extends Database {

    function __construct() {
        // automatically set a default table name for modelss
        if(!property_exists($this, 'table')) {

            $this->table = strtolower($this::class) . "s";
        }
    }

    public function where($column, $value) {

        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, ['value'=>$value]);
    }

    public function findAll() {

        $query = "SELECT * FROM $this->table";
        return $this->query($query);
    }

}