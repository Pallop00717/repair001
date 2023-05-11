<!DOCTYPE html>
<html lang="en">
<?php $menu = "index"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>

    <div class="content-wrapper">
      <section class="content">
          <div class="col-md-12 my-3">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'add') {
              include('');
            } elseif ($act == 'edit') {
              include('');
            } else {
              include('case_list.php');
            }
            ?>
          </div>
      </section>
    </div>
  </div>
  <?php include("footer.php"); ?>
  <aside class="control-sidebar control-sidebar-dark">
  <?php include("script.php"); ?>
</body>

</html>