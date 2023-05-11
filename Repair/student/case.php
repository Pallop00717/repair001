<!DOCTYPE html>
<html lang="en">
<?php $menu = "case"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    include('condb.php');
    $sql = "SELECT * FROM tbl_login WHERE user_id =$user_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    // echo $sql;
    // exit();
    ?>

    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="col-md-12 my-3">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'add') {
              include('');
            } elseif ($act == 'edit') {
              include('');
            } else {
              include('case_form_add.php');
            }
            ?>
          </div>
        </div>
    </div>
    </section>

  </div>

  <?php include("footer.php"); ?>
  <?php include("script.php"); ?>
</body>

</html>