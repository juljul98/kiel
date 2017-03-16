<?php
    global $error;
    if (isset($_POST['login'])) {
        $username = $input->request('username');
        $password = md5($input->request('password'));
        $login = $function->get_login($username,$password);
        if ($login) {
            header("location:/home");
        } else {            
            $error = 'Wrong username and password';
        }
    }
    if (isset($_POST['remember'])) {
        $func->set_cookies($username);
    }