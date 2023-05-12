<?php

/**
 * home controller
 */
class Home extends Controller
{
    function index() {

        $user = new User();

        // $data = $user->where('firstname', 'Ayoub');

        // $arr['firstname'] = 'Mohammed Amine';
        // $arr['lastname'] = 'Alami';
        // $arr['date'] = '2023-05-12 17:24:01';
        // $arr['user_id'] = 'sdjhbcjd';
        // $arr['gender'] = 'female';
        // $arr['school_id'] = 'bbhjhbjh';
        // $arr['rank'] = 'student';

        // $user->insert($arr);
        // $user->update(3,$arr);
        // $user->delete(2);
        $data = $user->findAll();

        $this->view('home', ['rows'=>$data]);
    }
}
