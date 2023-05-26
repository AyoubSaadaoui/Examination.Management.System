<?php

/**
 * Authenticate class
 */

class Auth {

    public static function authenticate($row) {

        $_SESSION['USER'] = $row;
    }


    public static function logout() {

        if(isset($_SESSION['USER'])) {

            unset($_SESSION['USER']);
        }
    }

    public static function logged_in() {

        if(isset($_SESSION['USER'])) {

            return true;
        }

        return false;
    }

    public static function user() {

        if(isset($_SESSION['USER'])) {

            return $_SESSION['USER']->firstname;
        }

        return false;
    }

    // use function not created or existed
    public static function __callStatic($method, $params) {

        $prop = strtolower(str_replace("get", "", $method));
        if(isset($_SESSION['USER']->$prop)) {

            return $_SESSION['USER']->$prop;
        }

        return "unknown";
    }

	public static function switch_school($id) {

		if(isset($_SESSION['USER']) && $_SESSION['USER']->rank == 'super_admin')
		{
			$user = new User();
			$school = new School();

			if($row = $school->where('id',$id))
			{
				$row = $row[0];
				$arr['school_id'] = $row->school_id;

				$user->update($_SESSION['USER']->id,$arr);
				$_SESSION['USER']->school_id = $row->school_id;
				$_SESSION['USER']->school_name = $row->school;

			}

			return true;
		}

	 return false;
 }

    public static function access($rank = 'student') {

		if(!isset($_SESSION['USER'])) {
			return false;
		}

		$logged_in_rank = $_SESSION['USER']->rank;

		$RANK['super_admin'] 	= ['super_admin','admin','teacher','reception','student'];
		$RANK['admin'] 			= ['admin','teacher','reception','student'];
		$RANK['teacher'] 		= ['teacher','reception','student'];
		$RANK['reception'] 		= ['reception','student'];
		$RANK['student'] 		= ['student'];

		if(!isset($RANK[$logged_in_rank])) {
			return false;
		}

		if(in_array($rank,$RANK[$logged_in_rank])) {
			return true;
		}

		return false;
	}

	public static function i_own_content($row) {

		if(!isset($_SESSION['USER'])) {
			return false;
		}

		if(isset($row->user_id)) {

			if($_SESSION['USER']->user_id == $row->user_id) {
				return true;
			}
		}

		$allowed[] = 'super_admin';
		$allowed[] = 'admin';

		if(in_array($_SESSION['USER']->rank,$allowed)) {
			return true;
		}

		return false;
	}

}