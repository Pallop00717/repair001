<!DOCTYPE html>
<html lang="en">
<?php $menu = "worker_profile"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    include('condb.php');
    $ID = $_SESSION['user_id'];
    $sql = "SELECT * FROM tbl_login WHERE user_id = $ID";
    $result = mysqli_query($con, $sql) or die("Error in query: $sql" . mysqli_error());
    $row = mysqli_fetch_array($result);
    // echo $sql;
    // exit();
    ?>

    <div class="content-wrapper">

      <?php
      if (@$_GET['do'] == 'success') {
        echo '<script type="text/javascript">
              swal("", "ทำรายการสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker_profile.php" />';
      } else if (@$_GET['do'] == 'finish') {
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker_profile.php" />';
      } else if (@$_GET['do'] == 'f') {
        echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker_profile.php" />';
      } ?>
      <section class="content">

        <div class="container-fluid col-md-12 my-3">
          <?php include('worker_profile_list.php'); ?>
        </div>

    </div>
    </section>
  </div>
  <?php include("footer.php"); ?>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  </div>
  <?php include("script.php"); ?>
</body>

</html>