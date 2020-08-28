<?php

    header('Content-type:text/html; charset=utf-8');

    $name= $_POST['name'];
    $add= $_POST['address'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];

    echo "$name <br>";
    echo "$add <br>";
    echo "$email <br>";
    echo "$gender <br>";

?>