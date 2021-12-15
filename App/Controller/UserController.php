<?php

use App\Request\Request;

class UserController {

    public function index(){
        return view('login');
    }

    public function login(){
        if($_POST){
            $mail = Request::post('mail');
            $password = md5(Request::post('password'));
            $check = DB::table('users')
                ->where('email',$mail)
                ->whereAnd('password',$password)
                ->result();

            if(mysqli_num_rows($check) > 0) {
                foreach($check as $res) {}
                Session::start($res["id"]);
                header("location:?page=home");
                return view('home');
            }else {
                $message = "Kullanıcı adı veya parola hatalı!";
                return view('login', compact('message'));
            }
        }else {
            return view('login');
        }
    }

    public function register(){
        if($_POST) {
            $data = [
              "name" => Request::post('name'),
              "phone" => Request::post('phone'),
              "email" => Request::post('mail'),
              "password" => md5(Request::post('password'))
            ];

            $reg = DB::table('users')->insert($data);

            echo $reg ? 1 : 0;
        }else {
            return view('register');
        }
    }

    public function logout(){
        unset($_SESSION["user"]);
        unset($_SESSION["login"]);
        header("location:?page=login");
    }
}