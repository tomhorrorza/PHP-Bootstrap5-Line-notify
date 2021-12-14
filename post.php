<?php
require(__DIR__.'/vendor/autoload.php');
$token = 'XaGgaqklSN3l8dMnu34z3uXtaL0XPHpc7oRhC7nc9Qs';
$ln = new KS\Line\LineNotify($token);
if(isset($_POST['txt']) && !empty($_POST['txt'])){
$text = $_POST['txt'];

if($ln->send($text)){
    echo "<script>alert('ส่งข้อมูลเรียบร้อย'); window.location='index.php'</script>";
}else{
    echo "<script>alert('ผิดพลาดที่ระบบ'); window.location='index.php'</script>";
}
}else{
    echo "<script>alert('ไม่สามารถเข้าถึงข้อมูล'); window.location='index.php'</script>";
}
?>