<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function register() {
        return view('register');
    }

    public function showuser() {
        $data = array();
        if($_POST['pass1'] != $_POST['pass2']) {
            $data['status'] = ['error' => true, 'message' => 'Пароли не совпадают'];
        } else if($_POST['age'] < 18) {
            $data['status'] = ['error' => true, 'message' => 'Возраст ниже 18 лет'];
        } else {
            $data['status'] = ['error' => false, 'message' => 'Успешно зарегистрировано'];
            $data['login'] = $_POST['login'];
            $data['email'] = $_POST['email'];
            $data['age'] = $_POST['age'];
        }
        return view('showuser', $data);
    }
}
