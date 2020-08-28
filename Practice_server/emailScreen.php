<?php

    header('Content-type:text/html; charset=utf-8');

    $name= $_GET['name'];
    $email= $_GET['email'];
    $msg= $_GET['msg'];

    echo "$name<br>";
    echo "$email<br>";
    echo "$msg<br>";

?>