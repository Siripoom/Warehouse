<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script>
        src = "bootstrap\js\bootstrap.min.js"
    </script>
    <title>login</title>
</head>

<body>
    <?php include('server.php'); ?>
    <div class="container">
        <p class="text-center mt-3 h2">ระบบคลังสินค้า</p>
        <img src="img/warehouse.png" class="rounded mx-auto d-block mt-3" style="width: 200px; height:200px;">
        <div class="row">
            <div class="col mt-4  shadow p-3  bg-body rounded" style="margin-left: 30rem; margin-right: 30rem;">
                <p class="h3 text-center">เข้าสู่ระบบ</p>
                <form action="login_db.php" method="post">
                <?php if (isset($_SESSION['error'])) : ?>
                                    <div class="error">
                                        <h5>
                                            <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                            ?>
                                        </h5>
                                    </div>
                                <?php endif ?>
                    <div class="mb-3">
                        <label class="form-label h4">ชื่อผู้ใช้</label>
                        <input class="form-control" type="text" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label h4">รหัสผ่าน</label>
                        <input class="form-control" type="text" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" value="เข้าสู่ระบบ">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>