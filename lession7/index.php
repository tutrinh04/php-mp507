
<?php
session_start();
ob_start();
require 'db/connect.php';
require 'lib/template.php';
?>
<?php
//$page=$_GET['page'];
$mod=isset($_GET['mod'])?$_GET['mod']:'home';
$act=isset($_GET['act'])?$_GET['act']:'main';
$path="modules/{$mod}/{$act}.php";
//echo $path;
if (!isset($_SESSION['username']) && $act!='login' && $act!='res'){
 header('location:?mod=users&act=login');
}
if (file_exists($path)){
    require $path;
}else{
    echo "khoong ton tai trang nay";
}
?>
<?php
//require 'inc/footer.php';
//?>