<?php

    header('Content-Type:text/html; charset=utf-8');

    // POST방식으로 보낸 값들은 $_POST 라는 배열변수에 저장됨
    $name= $_POST['name'];
    $password= $_POST['pw'];
    $gender= $_POST['rg'];
    $message= $_POST['msg'];
    $car= $_POST['sel'];

    //textarea 에서 입력한 값을 가진 $message는
    //줄바꿈 문자를 \n 으로 가지고 있음.
    //그래서 브라우저에서 제대로 출력되려면 
    // \n 을 <br> 로 변경로 변경 해주는 함수가 php에 기본 내장됨
    $message= nl2br($message);
    

    echo "$name <br>";
    echo "<h2>$password</h2>";
    echo "<h4>$gender</h4>";
    echo "<h4>$message</h4>";
    echo "<h4>$car</h4>";


    //배열로 전달된 fruits
    $fruits= $_POST['fruits'];
    //$fruits는 배열임!!!
    
    // php에서 배열의 길이값을 알아내는 함수가 있음
    $num= count($fruits);     //fruits의 방개수 카운트해서 $num 이라는 변수에 넣어주기

    echo "<h4>";
    for($i=0; $i<$num; $i++){
        echo "$fruits[$i],";
    }
    echo "</h4>";


    //hidden 타입으로 전달된 값
    $aa= $_POST['aa'];
    echo "$aa";

?>