<?php
  // db 접속 부분(반복될 내용) 분리 후 참조
  include 'db.php';

  // 브라우저 주소 localhost/폴더명/
  // // 접속 여부 확인
  // if(mysqli_connect_errno()) {
  //   echo '데이터베이스 접속 실패'; // echo: 출력 메소드
  //   echo mysqli_connect_error();
  // } else {
  //   echo '접속 성공';
  // }

  // 입력받은 데이터 변수로 저장 
  $name = $_GET['name'];
  $tel = $_GET['tel'];
  $email = $_GET['email'];
  $date = date('Y-m-d');
  // // 데이터 확인
  // echo $name;
  // echo $tel;
  // echo $email;

  // // 데이터 입력
  $query = "INSERT INTO membership(
    name, tel, email, date
  ) VALUES (
    '$name', '$tel', '$email', '$date'
  )";

  mysqli_query($dbConnect, $query); // 해당 데이터베이스에 데이터 입력
  
  // 제출 버튼 누른 후 지정 페이지로 이동
  echo "<script>location.href='index.php?name=$name';</script>";
?>