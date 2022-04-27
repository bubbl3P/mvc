<?php

    $connect = mysqli_connect('localhost', 'root', '','mvc_test');
    mysqli_set_charset($connect, 'utf8');
    mysqli_close($connect);
switch($action){
    case '':
        $sql = "SELECT * FROM sinh_vien";
        $result = mysqli_query($connect, $sql);
    case 'store':
        $sql1 = "insert into sinh_vien(ten) values('$ten')";
        mysqli_query($connect, $sql1);
        break;
}



