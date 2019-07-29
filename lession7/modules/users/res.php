<?php
if (isset($_POST['btn-add'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "không được để trống username";
    } else {
        $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($pattern, $_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "không được để trống password";
    } else {
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if (!preg_match($pattern, $_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = md5($_POST['password']);
        }
    }
    if (empty($_POST['re-password'])) {
        $error['re-password'] = "không được để trống password 2";
    } else {
        $repassword = md5($_POST['re-password']);
    }
    if (empty($error)) {
        $sql = "SELECT * FROM `account` where `username`='{$username}'";
        $result = mysqli_query($conn, $sql);
        if ($password != $repassword) {
            $error['cc'] = "Nhap 2 mat khau phai giong nhau";
        } else if (mysqli_num_rows($result) > 0) {
            $error['tb'] = "username da ton tai";
        } else {
            $sql = "INSERT INTO `account`(`username`,`password`)" . "VALUE('{$username}','{$password}')";
            if (mysqli_query($conn, $sql)) {
                echo "dang ki thanh cong";
//                echo "<pre>";
//                print_r($sql);
//                echo "</pre>";
            } else {
                echo "dang ki that bai";
            }
        }
    }
}
?>
<form method="POST" action="">
    <h1>Dang Ki Người Dùng</h1>
    <label for="">Username</label><br>
    <input type="text" value="" class="form-control" placeholder="nhap ho va ten" name="username"><br>
    <?php if (!empty($error['username'])) {
        ?>
        <p class="error" style="color: red;"><?php echo $error['username'] ?></p>
        <?php
    } ?>
    <label for="">Password</label><br>
    <input type="password" value="" class="form-control" placeholder="nhap mật khẩu" name="password"><br>
    <?php if (!empty($error['password'])) {
        ?>
        <p class="error" style="color: red;"><?php echo $error['password'] ?></p>
        <?php
    } ?>
    <label for="">Re-Password</label><br>
    <input type="password" value="" class="form-control" placeholder="nhap lại mật khẩu" name="re-password"><br>
    <?php if (!empty($error['re-password'])) {
        ?>
        <p class="error" style="color: red;"><?php echo $error['re-password'] ?></p>
        <?php
    } ?>
    <input type="submit" value="Gui" name="btn-add">
    <?php if (!empty($error['cc'])) {
        ?>
        <p class="error" style="color: red;"><?php echo $error['cc'] ?></p>
        <?php
    } ?>
    <?php if (!empty($error['tb'])) {
        ?>
        <p class="error" style="color: red;"><?php echo $error['tb'] ?></p>
        <?php
    } ?>
    <p style="text-align: center">Trở vê trang <a href="?mod=users&act=login" style="color: red;">Đăng nhập</a></p>
</form>
<style>
    form {
        width: 300px;
        height: 300px;
        min-height: 400px;
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
