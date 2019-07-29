<?php
//ket noi db
$conn = mysqli_connect('localhost', 'root', '', 'lession7');
if (!$conn) {
    echo "ket noi thanh cong" . mysqli_connect_error();
    die();

}