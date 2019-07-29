<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/1.css">
    <title>Bài Tập</title>
</head>
<body>
<div id="wapper">
    <div class="login" style="float: right;line-height: 40px;color: white">
        <p>Xin chao :<strong><?php
                if (isset($_SESSION['username']) && $_SESSION['username']){
                    echo$_SESSION['username'];
                }
                ?> </strong> | <a href="?mod=users&act=logout"> Thoat</a></p>
    </div>
    <div id="header">
        <ul id="main-menu">
            <li><a href="?mod=bai1&act=main">Bài 1</a></li>
            <li><a href="?mod=bai3&act=main">Bài 2</a></li>
            <li><a href="?mod=users&act=main">Bài 3</a></li>
        </ul>
    </div>