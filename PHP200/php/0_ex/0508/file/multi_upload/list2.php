<?
  // db.php 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0508/file/db.php";

  // db 데이터 가져오기
  $query = "select * from files order by num desc";

  // db 조회
  $result = mysqli_query($dbConnect, $query);

  while($row = mysqli_fetch_array($result)) {
    $data = '<li><img src="{$row["name"]}" alt=""></li>';
?>

<ul>
  <?=$data?>
</ul>

<? } ?>