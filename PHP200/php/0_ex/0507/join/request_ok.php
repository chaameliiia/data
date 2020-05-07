<!-- 정보값 DB -->
<?
  $id = $_GET['id'];
  $pw = $_GET['pw'];
  $gender = $_GET['gender'];
  $city = $_GET['city'];
  $how = $_GET['how'];
  $content = $_GET['content'];

  echo $id."<br>";
  echo $pw."<br>";
  echo $gender."<br>";
  echo $city."<br>";
  echo $how[0]."<br>";
  echo $content;

  foreach($how as $value) {
    $h .= $value."/";
    echo "<br>".$h;
  }
?>