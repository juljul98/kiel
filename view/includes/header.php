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
    $controller_name = HELPER::page() .'.php';
    
    require_once('../controller/'.$controller_name);

echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>'.$title.'</title>
</head>
<body>';
	
