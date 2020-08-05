<?php

if (isset($_POST['login-register'])) {
    if ($_POST['login-register'] == 'login') {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $user = GetUserInfoByEmailAndPassword($_POST['email'], $_POST['password']);
            if ($user != null) {
                $_SESSION['auth'] = $user;
            } else {
                $error_msg = 'email or password is wrong';
            }
        } else {
            $error_msg = 'please fill all the fields';
        }
    } elseif ($_POST['login-register'] == 'register') {
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['conf_password'])) {
            if ($_POST['password'] != $_POST['conf_password']) {
                $error_msg = 'password and confirm password is not equal';
            } else {
                $role = GetRoleByName('User');
                try {
                    $insertedUserId = InsertUser($_POST['name'],$_POST['surname'],$_POST['email'],$_POST['password'],$role[0]['id']);
                    $user = GetUserInfoByEmailAndPassword($_POST['email'], $_POST['password']);
                    $_SESSION['auth'] = $user;
                } catch (Exception $ex){
                    $error_msg = 'error occurred in register';
                }
            }
        } else {
            $error_msg = 'please fill all the fields';
        }
    }
}
