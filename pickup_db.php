<?php
require('server.php');
session_start();

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    ';

$name = $_POST["name"];
$object = $_POST["object"];
$amount = $_POST["amount"];

// echo $name;

$query = "SELECT*FROM tb_goods where goodsname = '$object'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



if ($_POST["submit"]) {
    $name = $_POST["name"];
    $object = $_POST["object"];
    $amount = $_POST["amount"];




    $insert = "INSERT INTO tb_pickup (name,object,amount)VALUEs('$name','$object','$amount')";
    $result = mysqli_query($conn, $insert);

    $net = $row["amount"] - $amount;

    $update  = "UPDATE`tb_goods` SET `amount`= '$net' WHERE goodsname = '$object'";
    $sql = mysqli_query($conn, $update);

    echo '
       <script>
       setTimeout(function() {
       swal({
               title: "success",
               text: "",
               type: "success"
           }, function() {
           window.location = "pickup.php";
       });
       }, 1000);
   </script>
       ';

    // header("location:pickup.php");

}
