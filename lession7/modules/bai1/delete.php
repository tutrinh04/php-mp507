<?php
$id=(int)$_GET['id'];
$sql="DELETE FROM `customer_name` WHERE `id`={$id}";
if (mysqli_query($conn,$sql)){
    header('Location:http://localhost/php-m0507/lession7/?mod=bai1&act=main');
}
