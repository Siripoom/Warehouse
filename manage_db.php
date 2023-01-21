
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.5/dist/sweetalert2.min.js"></script>
<?php

include('server.php');
session_start();

if (isset($_POST['add'])) {
    $goodsname = $_POST['goodsname'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    $insert = "INSERT INTO tb_goods(goodsname,price,amount)VALUE('$goodsname','$price','$amount')";
    $sql = mysqli_query($conn, $insert);

    if ($sql) {
        echo '<script>
            swal("Success!", "Your message was sent successfully.", "success").then((value) => {
                setTimeout(function(){
                swal.close();
                }, 3000);
            });
        </script>';
    }else{
        echo "error";
    }
}else{
    echo "error";
}

?>