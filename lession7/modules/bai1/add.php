<?php
if (isset($_POST['btn-add'])) {
    $hoten = $_POST['hoten'];
    $sql = "INSERT INTO `customer_name`(`hoten`)" . "VALUE('{$hoten}')";
    if (mysqli_query($conn, $sql)) {
//        echo "them thanh cong";
        header('Location:http://localhost/php-m0507/lession7/?mod=bai1&act=main');

    } else {
        echo "them that bai";
    }
}

?>
<?php
get_header();
?>
<form method="POST" action="">
    <h1>Thêm Thông tin</h1>
    <label for="">HO TEN</label><br>
    <input type="text" value="" class="form-control" placeholder="nhap ho va ten" name="hoten"><br>
    <input type="submit" value="Gui" name="btn-add">

</form>
<?php
get_footer();
?>
<style>
    form {
        width: 300px;
        height: 300px;

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