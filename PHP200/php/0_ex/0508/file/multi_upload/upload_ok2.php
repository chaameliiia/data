<?
  // db.php 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0508/file/db.php";

  // input으로 전달받은 file 변수에 저장
  $file = $_FILES['upload'];

  // input으로 전달받은 file 확인
  echo "<pre>";
  var_dump($file);

  // $file배열 값 확인
  // echo $file['name'][0];

  // foreach($file as $key => $arr) { // $file 배열의 1depth 총 5번 반복
  //   foreach($arr as $values) { // $file 배열의 2depth 총 2번 반복
  //     // echo $values;
      
  //     if($key == 'name') {
  //       echo $values;
  //     }
  //   }
  // }

  foreach($file['name'] as $key => $arr) {
    $fileName = $file['name'][$key];
    $tmp = $file['tmp_name'][$key];
    $uploadUrl = './'.$file['name'][$key];

    move_uploaded_file($tmp, $uploadUrl);

    $name[$key] = $fileName;
  }

  echo $name[0];

  // db에 입력
  $query = "INSERT INTO files(
    name, name2
  ) values(
    '$fileName[0]', '$fileName[1]'
  )";
  mysqli_query($dbConnect, $query);

//   // input으로 전달받은 file 확인 → 배열 형식
//   // echo $file['name'];
//   // echo $file['size'];
//   // echo $file['tmp_name'];

  

//   // 저장 위치 지정
//   // move_uploaded_file($tmp, $uploadUrl);
//   if(move_uploaded_file($tmp, $uploadUrl)) {
//   // move_uploaded_file(파일명, 파일저장위치) → 같은 이름 파일 있을 경우 덮어쓰기
//     echo "업로드 성공";
//   } else {
//     echo "업로드 실패";
//   }
  
//   // db에 입력
//   $query = "INSERT INTO files(
//     name
//   ) values(
//     '$fileName'
//   )";
//   mysqli_query($dbConnect, $query);
// ?>

<!-- 업로드한 이미지 출력 -->
<!-- <style>
  img {
    width: 200px;
  }
</style>
<img src="<?=$fileName?>" alt=""> -->