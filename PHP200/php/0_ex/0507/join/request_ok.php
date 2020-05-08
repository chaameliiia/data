<!-- 정보값 DB -->
<?
  // 절대경로로 db.php 참조 → db 연결
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0507/join/db.php";
  
  $id = $_GET['id'];
  $pw = $_GET['pw'];
  $gender = $_GET['gender'];
  $city = $_GET['city'];
  $how = implode('/', $_GET['how']);
  // implode(구분 단위, 배열): 배열값을 문자열로 반환
  $content = $_GET['content'];

  echo $id."<br>";
  echo $pw."<br>";
  echo $gender."<br>";
  echo $city."<br>";
  echo $how."<br>";
  echo nl2br($content);
  // nl2br(): 문자열 줄바꿈 위치에 <br> 삽입

  // foreach($how as $value) {
  //   $h .= $value."/";
  //   echo "<br>".$h;
  // }

  // db에 입력받은 자료 저장
  if(!isset($_GET['mode'])) { // request.php에서 넘어왔을 때 실행
    $query = "INSERT INTO signup(
      id, pw, gender, city, how, content
    ) values(
      '$id', '$pw', '$gender', '$city', '$how', '$content'
    )";
  } else { // modify.php에서 넘어왔을 때 실행
    $num = $_GET['num'];
    $query = "UPDATE signup set
    id='$id', pw='$pw', gender='$gender', city='$city', how='$how', content='$content'
    where num = '$num'"; // index에서 선택한 항목만 update
  }
  
  // db 조회
  mysqli_query($dbConnect, $query);

  // index.php로 이동
  echo "<script>location.href='index.php';</script>";
?>