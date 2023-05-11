<!DOCTYPE html>
<html lang="en">
<?php $menu = "room"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    include("condb.php"); // เชื่อมต่อฐานข้อมูล
    ?>

    <div class="content-wrapper py-3">
      <section class="content ">
        <div class="container-fluid ">
          <div class="col-md-12">
            <?php
              include('room_add.php');
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