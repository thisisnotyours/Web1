<?php

    header('Content-type:text/html; charset=utf-8');

    $message= $_POST['msg'];
    $feelings= $_POST['feelings'];
    $toyou= $_POST['sel'];

    //이미지
    $img= $_FILES['loved'];

    echo "$message<br>";
    echo "$feelings<br>";
    echo "$toyou<br>";

?>