<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.js"></script>
<?php

include('server.php');
session_start();

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

if (isset($_POST["add"])) {
    //todo get value to valiable
    $goodsname = $_POST["goodsname"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    //todo Check data
    $check = "SELECT * FROM tb_goods WHERE goodsname = '$goodsname' LIMIT 1";
    $sql = mysqli_query($conn, $check);

    if ($sql) {
        header("location:manage.php");
    }

    if ($goodsname != '' and $price != '' and $amount != '') {
        $insert = "INSERT INTO tb_goods(goodsname,price,amount)VALUE('$goodsname','$price','$amount')";
        $sql = mysqli_query($conn, $insert);

        if ($sql) {
            echo '
            <script>
            setTimeout(function() {
            swal({
                    title: "success",
                    text: "",
                    type: "success"
                }, function() {
                window.location = "manage.php";
            });
            }, 1000);
        </script>
            ';
        } else {
            echo '
            <script>
            setTimeout(function() {
            swal({
                    title: "Error",
                    text: "Please try again",
                    type: "error"
                }, function() {
                window.location = "manage.php";
            });
            }, 1000);
        </script>
            ';
        }
    }
}

if (isset($_POST["delete"])) {

    $goodsname = $_POST["goodsname"];
    $id = $_POST["id_goods"];

    $delete = "DELETE FROM tb_goods WHERE id_goods = '$id' OR goodsname = '$goodsname' ";
    $sql = mysqli_query($conn, $delete);

    if ($sql) {
        echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "Deleted",
               type: "success"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
    } else {
        echo '
        <script>
        setTimeout(function() {
        swal({
                title: "Error",
                text: "Please try again",
                type: "error"
            }, function() {
            window.location = "manage.php";
        });
        }, 1000);
    </script>
        ';
    }
}

if (isset($_POST["edit"])) {

    $id = $_POST["id_goods"];
    $goodsname = $_POST["goodsname"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    if ($goodsname != "") {
        $update = "UPDATE tb_goods set goodsname='$goodsname' WHERE id_goods = '$id'";
        $result = mysqli_query($conn, $update);

        if ($price != "") {
            $update = "UPDATE tb_goods set price='$price' WHERE id_goods = '$id'";
            $result = mysqli_query($conn, $update);
            if ($result) {
                echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "",
               type: "success"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
            } else {
                echo '
                <script>
                setTimeout(function() {
                swal({
                        title: "Error",
                        text: "Please try again",
                        type: "error"
                    }, function() {
                    window.location = "manage.php";
                });
                }, 1000);
            </script>
                ';
            }
        }
        if ($amount != "") {
            $update = "UPDATE tb_goods set amount='$amount' WHERE id_goods = '$id'";
            $result = mysqli_query($conn, $update);
            if ($result) {
                echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "",
               type: "success"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
            } else {
                echo '
                <script>
                setTimeout(function() {
                swal({
                        title: "Error",
                        text: "Please try again",
                        type: "error"
                    }, function() {
                    window.location = "manage.php";
                });
                }, 1000);
            </script>
                ';
            }
        }
        if ($result) {
            echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "",
               type: "success"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
        } else {
            echo '
            <script>
            setTimeout(function() {
            swal({
                    title: "Error",
                    text: "Please try again",
                    type: "error"
                }, function() {
                window.location = "manage.php";
            });
            }, 1000);
        </script>
            ';
        }
    }


    // $update = "UPDATE tb_goods set goodsname='$goodsname',price='$price',amount='$amount' WHERE id_goods = '$id'";
    // $result = mysqli_query($conn, $update);

}

if (isset($_GET["idm"])) {
    $id = $_GET["idm"];
    $delete = "DELETE FROM tb_goods WHERE id_goods='$id'";
    $sql = mysqli_query($con, $delete);
    if ($sql) {
        echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "",
               type: "success"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
    } else {
        echo '
       <script>
       setTimeout(function() {
       swal({
               title: "Error",
               text: "Please try again",
               type: "error"
           }, function() {
           window.location = "manage.php";
       });
       }, 1000);
   </script>
       ';
    }
}




?>