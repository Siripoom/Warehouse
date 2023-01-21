<?php 
include('menu.php'); 

include('server.php');
?>

<head>
  <title>จัดการสินค้า</title>
</head>

<body>

  <div class="container-fueid">
    <div class="content">
      <form action="" method="post">
        <div class=row>
          <div class="col-1">
          </div>
          <div class="col-10">

            <div class="h3 mt-3 text-center">จัดการสินค้า</div>

            <table class="table table-bordered mt-3">
              <thead>
                <form action="manage_db.php" method="POST">
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
                  <input type="submit" class="btn btn-danger mt-3 mx-2" name="delete" value="ลบข้อมูล">

                  <input type="submit" class="btn btn-success mt-3 mx-2" name="add" value="เพิ่มช้อมูล">

                  <input type="submit" class="btn btn-warning mt-3 mx-2" name="edit" value="แก้ไขช้อมูล">

                  <input type="submit" class="btn btn-warning mt-3 mx-2" name="sort" value="เรียงข้อมูล">

                </form>
          </div>
      </form>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>จำนวนสินค้า</th>
            <th>วันที่นำเข้า</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>01</td>
            <td>01</td>
            <td>01</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>