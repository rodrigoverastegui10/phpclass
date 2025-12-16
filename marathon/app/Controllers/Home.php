<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('form');
        return view('homepage');

    }

    public function play($data): string
    {
        $data = $data * 12;
        echo "Hello World -> " .$data;
        exit();
        //return view('welcome_message');
    }

    public function login(): string
    {
        $rules=[
            'username'=>'required|valid_email',
            'password'=>'required'
        ];

        if (!$this->validate($rules)){
            $data = array('load_error'=>'true');
            helper('form');
            return view('homepage', $data);
        }else{
            //hit the DB
            //Do work

            //Pass

            //Fail
            $data = array('load_error'=>'true', 'error_message'=>'Invalid username or Password');
            helper('form');
            return view('homepage', $data);

        }
    }

    public function create(): string
    {

        echo "create" ;
        exit();

    }
}
