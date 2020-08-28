<?php

    header('Content-type:text/html; charset=utf-8');

    $files= $_FILES['bbb'];

    // files는 배열변수임   //count 는 배열의 개수를 세는 함수
    echo count($files['name'])."<br>";
    echo count($files['type']);
    echo "=====================<br>";


    // 선택된 파일의 개수
    $fileNum= count($files['name']);

    for($i=0; $i<$fileNum; $i++){
        $srcName= $files['name'][$i];   //원본 파일명
        $tmpName= $files['tmp_name'][$i];  //임시 저장소 경로
        $type= $files['type'][$i];  //파일 타입
        $size= $files['size'][$i];  //파일 사이즈

        echo $srcName . "<br>";
        echo $tmpName . "<br>";
        echo $type . "<br>";
        echo $size . "<br>";
        echo "=====================<br>";

        //영구저장소로 파일 이동
        $dstName= "./kkk/" . date('Ymdhis') . $srcName;    //(".jpg") 대신에 - $srcName 은 확장자까지 포함
        move_uploaded_file($tmpName, $dstName);


    }
    


?>