<?php

    header('Content-type:text/html; charset=utf-8');

    // form요소로 부터 받은 GET 방식으로 전달된 값들 받기
    // php는 GET 방식으로 전달된 값들을 $_GET 이라는 이름의
    // 배열 변수에 가지고 있음    //'배열의 이름' = 'title'  -인덱스(0,1,2..)대신 사용
    $title= $_GET['title'];     //별도의 변수($title)에 옮김 
    $message= $_GET['msg'];

    echo "<h2>제목 : $title </h2>";
    echo "<p>메세지 : $message </p>";

    
    

?>