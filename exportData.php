<?php

   require('server.php');

   $query = $conn->query("SELECT * FROM tb_goods ORDER BY id_goods ASC");

   if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "goods_data_" . date('Y-m-d') . ".csv";

    $f = fopen('php://memory','w');

    $fields = array('ID','GOODS NAME','PRICE','AMOUNT','DATE');
    fputcsv($f,$fields,$delimiter);

    while($row = $query -> fetch_assoc()){
        // $status = ($row['status'] == 1)?'Active':'Inactive';
        $lineData = array($row['id_goods'],$row['goodsname'],$row['price'],$row['amount'],$row['date']);
        fputcsv($f,$lineData,$delimiter);
        


    }

    fseek($f,0);

    header('Content-Type: text/csv');
    header('Content-Disposition:attachment;filename="'.$filename.'";');

    fpassthru(($f));



   }
   exit;
