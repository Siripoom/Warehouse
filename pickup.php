<?php
include('menu.php');

include('server.php');

session_start();

$query = "SELECT*FROM tb_pickup GROUP BY  id_PU DESC";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PickUp</title>
</head>

<body>
    <div class="container-fueid">
        <div class="content">
            <div class="row">
                <div class="h3 mt-3 mb-3 text-center">เบิกสินค้า</div>
                <div class="input-group">
                    <form action="pickup_db.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" placeholder="แผนก/ผู้เบิก" onfocus="this.value=''" class="form-control">
                            </div>
                            <div class="col">
                                <div class="goodsname">
                                    <input type="text" name="object" placeholder="ของที่ต้องการเบิก" onfocus="this.value=''" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="amount">
                                    <input type="number" name="amount" placeholder="ป้อน จำนวน" onfocus="this.value=''" class="form-control">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success" name="submit" value="เบิกสินค้า" style="width
                            :100px;">
                        </div>
                    </form>
                </div>
                <div class="h4 mt-3 mb-3">ประวัติการเบิกสินค้า</div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>รหัสการเบิก</th>
                        <th>แผนก/ผู้เบิก</th>
                        <th>ของที่เบิก</th>
                        <th>จำนวน</th>
                        <th>วันที่เบิก</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["id_PU"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["object"]; ?></td>
                            <td><?php echo $row["amount"]; ?></td>
                            <td><?php echo $row["datetime"]; ?></td>
                            <!-- <td class="text-center">
                                <a href="deletedatamember.php?idm=<?php echo $row["id_goods"]; ?>" class="btn btn-danger btn-sm ">ลบข้อมูล</a>
                                <a href="deletedatamember.php?idm=<?php echo $row["id_goods"]; ?>" class="btn btn-warning btn-sm ">แก้ไขสินค้า</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>