<?php

    header('Content-Type:text/html; charset=utf-8');

    $name= $_GET['name'];
    $email= $_GET['email'];

    echo " $name 과 $email 이 등록되었습니다.";

?>