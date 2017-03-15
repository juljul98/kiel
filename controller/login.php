<?php

    $trigger = true;
    if (isset($_POST['login'])) {
        $username = $input->request('username');
        $password = md5($input->request('password'));
        $login = $function->get_login($username,$password);
        if ($login) {
            // header("location:/home");
            echo 'Successfully Login';
        } else {
            // $trigger = false;
            echo 'wrong username and password';
        }
    }

    if (isset($_POST['remember'])) {
        $func->set_cookies($username);
    }

    error_reporting(0);
    ini_set('display_errors', 0);
    $id = $_SESSION['id'];
    $fullname = $_SESSION['username'];

    // if ($id != null) {
    //     header("location: /login");
    // }