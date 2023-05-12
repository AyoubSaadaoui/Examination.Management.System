<?php

/**
 * database class
 */
class Database {

    private function connect() {

        $string = DBDRIVER.":host=".DBHOST.";dbname=".DBNAME;

        if(!$con = new PDO($string,DBUSER,DBPASSWORD)) {
            die("cloud not connect to database");
        }

        return $con;
    }

    public function query($query, $data = array(), $data_type = "object") {

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


}






