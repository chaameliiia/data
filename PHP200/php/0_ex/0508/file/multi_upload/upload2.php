<?
  // db.php 접근
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once $root."/0_ex/0508/file/db.php";
?>

<form action="upload_ok2.php" method="post" enctype="multipart/form-data">
<!--
  파일 업로드할 경우 <form method="post" enctype="multipart/form-data"> 필수
-->
  <input type="file" name="upload[]">
  <input type="file" name="upload[]">
  <input type="submit" value="업로드">
</form>