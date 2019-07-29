<?php
if (isset($_POST['btn-add'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $sql = "INSERT INTO `nhan`(`fullname`,`email`,`phone`,`addr`)" . "VALUE('{$fullname}','{$email}','{$phone}','{$adress}')";
    if (mysqli_query($conn, $sql)) {
//        echo "them thanh cong";
        header('Location:http://localhost/php-m0507/lession7/?mod=bai3&act=main');
    } else {
        echo "them that bai";
    }
}
?>
<?php
get_header()
?>
<form action="" method="POST">
    <h1>Thêm Thông Tin</h1>
    <label for="hoten">FullName</label><br>
    <input type="text" name="fullname" placeholder="nhap ten"><br>
    <label for="hoten">email</label><br>
    <input type="email" name="email" placeholder="nhap email"><br>
    <label for="hoten">phone</label><br>
    <input type="phone" name="phone" placeholder="nhap phone"><br>
    <label for="ad">dia chi</label><br>
    <input type="text" name="adress" placeholder="nhap dia chi"><br>
    <input type="submit" value="gui" name="btn-add">
</form>
<?php
get_footer();
?>
<style>
    form {
        width: 300px;
        height: 300px;
        min-height: 500px;
        margin: 30px auto;
    }

    h1 {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    form label {
        font-size: 16px;
        margin-top: 10px;
    }

    input {
        width: 292px;
        height: 40px;
        margin-bottom: 20px;
    }
</style>