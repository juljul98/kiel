<?php
    session_start();
    require_once ('../config.php');
    foreach (glob('../helpers/*.class.php') as $helpers) {
        require_once ($helpers);
    }
    foreach (glob('../model/*.php') as $models) {
        require_once ($models);
    }
    $title = $input->capitalize(HELPER::page()); 
    $url = helper::URL();
    $file = basename($url);
    $file_arr = explode("?", $file);
    $filename = $file_arr[0];
    require_once('../controller/'. $filename);




echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>'.$title.'</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head><a href="/home">Home</a>
        <a href="/logout">logout</a><body><a href="/login">Login</a>
        <a href="/register">Register</a>';
