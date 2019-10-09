<?php

namespace app\models;

class User extends AppModel {

    public $attributes = [
        'login' => '',
        'password' => '',
    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
        ],
    ];

    public function checkUnique(){
        $user = \R::findOne('user', 'login = ?', [$this->attributes['login']]);
        if($user){
            if($user->login == $this->attributes['login']){
                $this->errors['unique'][] = 'Этот логин уже занят';
            }
            return false;
        }
        return true;
    }

    public function login(){
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($login && $password){
            $user = \R::findOne('user', "login = ?", [$login]);
            if($user){
                if(password_verify($password, $user->password)){
                    foreach($user as $k => $v){
                        if($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }
        return false;
    }

    public static function checkAuth(){
        return isset($_SESSION['user']);
    }
}