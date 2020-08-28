<?php

    header('Content-type:text/html; charset=tf-8');

    // 사용자가 file을 전송하면 실제 파일의 데이터는 ㅇ
    // 임시 저장소에 저장되며 전송된 파일을 설명하는 
    // 추가데이터(header정보)만 이 php 문서에 전달됨
    // 전달된 추가데이터는 $_FILES라는 배열 변수에 저장됨. 
    // 저 $_FILES라는 배열은 다섯칸짜리로 구성되어잇음 (총 5칸짜리 요소)
    // name, type, size, error, tmp_name    => '연관배열'(방번호말고 '이름'으로 된 배열을 '연관'배열이라함)

    $file= $_FILES['aaa'];

    // $file은 배열변수임 -5칸 짜리 
    // 1. 전송된 원본파일명
    $srcName= $file['name'];
    // 2. 파일 타입
    $fileType= $file['type'];
    // 3. 파일 사이즈
    $fileSize= $file['size'];
    // 4. 업로드 된 파일이 잠시 보관된 저장소의 경로
    $tmpName= $file['tmp_name'];    //칸 안에 있는 이름들은 정해진 이름들..(name, type, size, tmp_name)

    echo "$srcName<br>";
    echo "$fileType<br>";
    echo "$fileSize <br>";
    echo "$tmpName<br>";


    // 임시저장소에 있는 파일을 영구저장하기위해 이동
    $dstName= './kkk/' . date('Ymdhis') . ".jpg";
    move_uploaded_file($tmpName, $dstName);   //tmpName에 있는 파일을 $dstName(web에 있는 kkk 폴더안에)으로 영구저장



?>