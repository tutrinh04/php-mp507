<?php
if (isset($_POST['btn-login'])) {
    $error = array();

    if (empty($_POST['username'])) {
        $error['username'] = "Khong duoc de trong ten dang nhap";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Khong duoc de trong mat khau";
    } else {
        $password = md5($_POST['password']);
    }
    //kết luân
    if (empty($error)) {
        $sql = "SELECT * FROM `account` where `username`='$username' and `password`='$password'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 0) {
            $error['ss'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        } else {
            $_SESSION['is_login']=true;
            $_SESSION['username'] = $username;
            header('location:http://localhost/php-m0507/lession7/?mod=users&act=main');
        }
    }
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username" value=""><br><br>
                        <?php if (!empty($error['username'])) { ?>
                            <p class="error" style="color: red;"><?php echo $error['username'] ?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                        <?php if (!empty($error['password'])) { ?>
                            <p class="error" style="color: red;"><?php echo $error['password'] ?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn" name="btn-login">
                    </div>
                    <?php if (!empty($error['ss'])) { ?>
                        <p class="error" style="color: red;"><?php echo $error['ss'] ?></p>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="?mod=users&act=res">Đăng kí</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Quên mật khẩu</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
