<?php
include('menu.php');

include('server.php');

$query = "SELECT*FROM tb_goods GROUP BY  id_goods DESC";
$result = mysqli_query($conn, $query);

?>

<head>
  <title>จัดการสินค้า</title>
</head>

<body>

  <div class="container-fueid">
    <div class="content">
      <form action="manage_db.php" method="post">
        <div class=row>
          <div class="col-1">
          </div>
          <div class="col-10">

            <div class="h3 mt-3 text-center">จัดการสินค้า</div>

            <table class="table table-bordered mt-3">
              <thead>
                <div class="row">
                  <div class="col">


                    <input type="text" name="id_goods" placeholder="ป้อน รหัสสินค้า" onfocus="this.value=''" class="form-control">
                  </div>
                  <div class="col">
                    <div class="goodsname">

                      <input type="text" name="goodsname" placeholder="ป้อน ชื่อสินค้า" onfocus="this.value=''" class="form-control">
                    </div>
                  </div>
                  <div class="col">
                    <div class="price">

                      <input type="number" name="price" placeholder="ราคา" onfocus="this.value=''" class="form-control">
                    </div>
                  </div>
                  <div class="col">
                    <div class="amount">

                      <input type="number" name="amount" placeholder="ป้อน จำนวน" onfocus="this.value=''" class="form-control">
                    </div>
                  </div>

                </div>
                <input type="submit" class="btn btn-danger mt-3 mx-2" name="delete" value="ลบสินค้า">

                <input type="submit" class="btn btn-success mt-3 mx-2" name="add" value="เพิ่มสินค้า">

                <input type="submit" class="btn btn-warning mt-3 mx-2" name="edit" value="แก้ไขสินค้า">

                <!-- <input type="submit" class="btn btn-warning mt-3 mx-2" name="sort" value="เรียงข้อมูล"> -->

      </form>
    </div>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th >รหัสสินค้า</th>
          <th >ชื่อสินค้า</th>
          <th >จำนวนสินค้า</th>
          <th >ราคาต่อหน่วย</th>
          <th >วันที่นำเข้า</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row["id_goods"]; ?></td>
            <td><?php echo $row["goodsname"]; ?></td>
            <td><?php echo $row["amount"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td class="text-center">
              <a href="deletedatamember.php?idm=<?php echo $row["id_goods"]; ?>" class="btn btn-danger btn-sm ">ลบข้อมูล</a>
              <a href="deletedatamember.php?idm=<?php echo $row["id_goods"]; ?>" class="btn btn-warning btn-sm ">แก้ไขสินค้า</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </div>

</body>