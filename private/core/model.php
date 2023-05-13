<?php

/**
 * main model
 */
class Model extends Database {

    public $errors = array();
    
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

    public function insert($data) {

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table ($columns) VALUES (:$values)";

        return $this->query($query, $data);
    }

    public function update($id, $data) {

        $str = "";
        foreach($data as $key => $value){
            // ".=" will concatenate strings
            // value1 =: value1 , ...
            $str .= $key . "=:" . $key . ",";
        }

        $str = trim($str, ",");
        $data['id'] = $id;
        $query = "UPDATE $this->table SET $str WHERE id = :id";
        return $this->query($query, $data);
    }

    public function delete($id) {

        $query = "DELETE FROM $this->table WHERE id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }

}