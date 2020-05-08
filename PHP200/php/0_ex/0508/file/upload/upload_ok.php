<?
  // db.php 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0508/file/db.php";

  // input으로 전달받은 file 가져오기
  $file = $_FILES['upload'];
  echo "<pre>";
  var_dump($file);

  // input으로 전달받은 file 확인 → 배열 형식
  // echo $file['name'];
  // echo $file['size'];
  // echo $file['tmp_name'];

  $fileName = $file['name'];
  $tmp = $file['tmp_name'];
  $uploadUrl = './'.$file['name'];

  // 저장 위치 지정
  // move_uploaded_file($tmp, $uploadUrl);
  if(move_uploaded_file($tmp, $uploadUrl)) {
  // move_uploaded_file(파일명, 파일저장위치) → 같은 이름 파일 있을 경우 덮어쓰기
    echo "업로드 성공";
  } else {
    echo "업로드 실패";
  }
  
  // db에 입력
  $query = "INSERT INTO files(
    name
  ) values(
    '$fileName'
  )";
  mysqli_query($dbConnect, $query);
?>

<!-- 업로드한 이미지 출력 -->
<style>
  img {
    width: 200px;
  }
</style>
<img src="<?=$fileName?>" alt="">