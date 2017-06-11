<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분
 
include ("configure.php");
include ("connect.php");
$connect=connect_db($host, $dbid, $dbpw, $dbname);
 
$data_stream = "'".$_POST['name']."','".$_POST['id']."','".$_POST['pw']."'";
$query = "insert into userinfo(name,id,pw) values (".$data_stream.")";
$result = mysqli_query($connect, $query);
 
mysqli_close($connect);
 
echo ('가입이 완료되었습니다. 메인 화면으로 이동합니다..');
echo("<meta http-equiv='Refresh' content='2; URL=index.html'>");
 
?>