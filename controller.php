<?php
    $action = '';
    if(isset($_GET['action'])){z
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            require 'model.php';
            require 'view/index.php';
            break;
        case 'create':
            require 'model.php';
            require 'view/create.php';
            break;
        case 'store':
            require 'model.php';
            break;
    }