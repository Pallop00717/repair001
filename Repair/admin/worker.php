<!DOCTYPE html>
<html lang="en">
<?php $menu = "worker"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    session_start();
    include("condb.php"); // เชื่อมต่อฐานข้อมูล
    $query_worker = "SELECT * FROM tbl_login WHERE user_level = 'worker'
                      order by user_id asc" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $query_worker);
    //   echo $query_worker;
    //   exit();
    ?>

    <div class="content-wrapper py-3">
      <?php
      if (@$_GET['do'] == 'success') {
        echo '<script type="text/javascript">
                            swal("", "ทำรายการสำเร็จ !!", "success");
                            </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } else if (@$_GET['do'] == 'finish') {
        echo '<script type="text/javascript">
                            swal("", "แก้ไขสำเร็จ !!", "success");
                            </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } else if (@$_GET['do'] == 'f') {
        echo '<script type="text/javascript">
                            swal("", "ผิดพลาด !!", "error");
                            </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } ?>

      <section class="content">
        <div class="container-fluid ">
          <div class="col-md-12">
            <?php include('worker_list.php'); ?>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php include("footer.php"); ?>
  <?php include("script.php"); ?>
</body>

</html>