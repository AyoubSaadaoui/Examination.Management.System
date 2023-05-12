<?php

/**
 * database class
 */
class Database {

    private function connect() {

        $string = "mysql:host=localhost;dbname=school_management";

        if(!$con = new PDO($string,'root','')) {
            die("cloud not connect to database");
        }

        return $con;
    }

    private function run($query, $data, $data_type = "object") {

        $con = $this->connect();
        $stm = $con->prepare($query);

        if($stm) {

            $check = $stm->execute($data);

            if($check) {
                // Fetch results based on data type
                if($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }
                // Return results if not empty
                if(is_array($data) && count($data) >0) {

                    return $data;

                }
            }
        }

        return false;
    }

    public function query() {

    }
}






