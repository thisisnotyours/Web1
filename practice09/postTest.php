<?php

    header('Content-Type:text/html; charset=utf-8');

    $name= $_POST['name'];
    $email= $_POST['email'];

    echo "Post: $name 과 $email 이 등록되었습니다";

?>