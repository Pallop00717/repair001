<!DOCTYPE html>
<html lang="en">
<?php $menu = "case_worker"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    $case_id = $_GET['case_id'];
    include('condb.php');

    $query_worker = "SELECT * FROM tbl_login WHERE user_level = 'worker'
    order by user_id asc" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $query_worker);
    ?>

    <div class="content-wrapper py-3">
      <?php
      if (@$_GET['do'] == 'success') {
        echo '<script type="text/javascript">
              swal("", "มอบงานแล้ว !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=index.php" />';
      } ?>

      <section class="content">
        <div class="container-fluid">
          <div class="col-md-12">
            <?php
            include('case_give_work2.php');
            ?>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include("footer.php"); ?>
  <?php include("script.php"); ?>
</body>

</html>