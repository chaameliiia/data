<script type="text/javascript">
  function run() {
    alert("hello world");
  }
  <?="run();"?>
</script>

<?
  // $str = "here!";
  $str = 10;
  // echo $str; // str == 10

  function getFile() {
    global $str; // 9번 줄에 있는 전역 변수 $str 가져옴
    // global 없으면 함수 스코프에 제한됨
    // $str = "come";
    // $str .= "come";
    // $str += 20; // global 선언 안 하면 $str 값 인지 X
    // echo $str; // str == 30

    return $str;
  }
?>

<script language="javascript">
  function getFile() {
    var aa = document.getElementById('aa');
    aa.innerHTML = "<?="$str"?>"; // 축약형
    // aa.innerHTML = "<?=getFile();?>"; // 축약형
    // aa.innerHTML = "<?echo getFile();?>"; // 정식 표현 → script 파일 안에 php 함수 실행 양식
  }
</script>

<div id="aa"></div>
<input type="button" value="click me" onclick="getFile()">