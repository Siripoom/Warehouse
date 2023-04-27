<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.js"></script>
<?php

include('server.php');
session_start();


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
            header("location:manage.php");
        } else {
            echo "Error";
        }
    }
}

if (isset($_POST["delete"])) {

    $goodsname = $_POST["goodsname"];
    $id = $_POST["id_goods"];

    $delete = "DELETE FROM tb_goods WHERE id_goods = '$id' OR goodsname = '$goodsname' ";
    $sql = mysqli_query($conn, $delete);

    if ($sql) {
        header("location:manage.php");
    } else {
        echo "Error";
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
                header('location:manage.php');
            } else {
                echo "Error";
            }
        }
        if ($amount != "") {
            $update = "UPDATE tb_goods set amount='$amount' WHERE id_goods = '$id'";
            $result = mysqli_query($conn, $update);
            if ($result) {
                header('location:manage.php');
            } else {
                echo "Error";
            }
        }
        if ($result) {
            header('location:manage.php');
        } else {
            echo "Error";
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
        header('location : manage.php');
    } else {
        echo "Error";
    }
}




?>