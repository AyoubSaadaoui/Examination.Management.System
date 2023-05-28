<?php

/**
 * main model
 */
class Model extends Database {

    public $errors = array();

    function __construct() {
        //
        if(!property_exists($this, 'table')) {

            $this->table = strtolower($this::class) . "s";
        }
    }

    protected function get_primary_key($table)
	{

		$query = "SHOW KEYS from $table WHERE Key_name = 'PRIMARY' ";
		$db = new Database();
		$data = $db->query($query);

		if(!empty($data[0]))
		{
			return $data[0]->Column_name;
		}
		return 'id';
	}

    public function where($column, $value, $orderby = 'DESC') {

        $column = addslashes($column);
		$primary_key = $this->get_primary_key($this->table);

		$query = "select * from $this->table where $column = :value ORDER BY $primary_key $orderby";
        $data =  $this->query($query, ['value'=>$value]);

        if(is_array($data)) {
            if(property_exists($this, 'afterSelect')) {

                foreach($this->afterSelect as $function) {

                    $data = $this->$function($data);
                }
            }
        }

        return $data;
    }

    public function findAll($orderby = 'DESC') {

        $primary_key = $this->get_primary_key($this->table);

        $query = "SELECT * FROM $this->table ORDER BY $primary_key $orderby";
        $data = $this->query($query);

        // run functions after select
        if(is_array($data)) {
            if(property_exists($this, 'afterSelect')) {

                foreach($this->afterSelect as $function) {

                    $data = $this->$function($data);
                }
            }
        }

        return $data;
    }

    public function insert($data) {

        // remove unwanted columns
        if(property_exists($this, 'allowedColumns')) {

            foreach($data as $key => $column) {

                if(!in_array($key, $this->allowedColumns)) {

                    unset($data[$key]);
                }
            }
        }

        // run functions before insert
        if(property_exists($this, 'beforeInsert')) {

            foreach($this->beforeInsert as $function) {

                $data = $this->$function($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table ($columns) VALUES (:$values)";

        return $this->query($query, $data);
    }

    public function update($id, $data) {

        //remove unwanted columns
		if(property_exists($this, 'allowedColumns'))
		{
			foreach($data as $key => $column)
			{
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}

		}

		//run functions before insert
		if(property_exists($this, 'beforeUpdate'))
		{
			foreach($this->beforeUpdate as $func)
			{
				$data = $this->$func($data);
			}
		}


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

    public function whereOne($column, $value, $orderby = 'DESC') {

        $primary_key = $this->get_primary_key($this->table);

        $query = "SELECT * FROM $this->table WHERE $column = :value  ORDER BY $primary_key $orderby";
        $data =  $this->query($query, ['value'=>$value]);

        if(is_array($data)) {
            if(property_exists($this, 'afterSelect')) {

                foreach($this->afterSelect as $function) {

                    $data = $this->$function($data);
                }
            }
        }

        if(is_array($data)) {

            $data = $data[0];
        }

        return $data;
    }

}