<!-- 입력된 내용 삭제 -->
<?
  // db 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0507/join/db.php";

  // index.php에서 선택한 항목 num값 받아서 변수에 저장
  $num = $_GET['num'];

  // db 데이터 가져오기
  $query = "DELETE * from signup where num=$num"; // index에서 선택한 항목 삭제
  
  // db 조회
  mysqli_query($dbConnect, $query);

  // index.php로 이동
  echo "<script>location.href='index.php';</script>";
?>