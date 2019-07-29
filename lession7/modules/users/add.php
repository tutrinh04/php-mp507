<?php
?>
<form method="POST" action="">
    <h1>Thêm Người Dùng</h1>
    <label for="">Username</label><br>
    <input type="text" value="" class="form-control" placeholder="nhap ho va ten" name="username"><br>
    <label for="">Password</label><br>
    <input type="text" value="" class="form-control" placeholder="nhap mật khẩu" name="password"><br>
    <label for="">Re-Password</label><br>
    <input type="text" value="" class="form-control" placeholder="nhap lại mật khẩu" name="re-password"><br>
    <input type="submit" value="Gui" name="btn-add">
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
