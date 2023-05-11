<!DOCTYPE html>
<html lang="en">
<?php $menu = "index"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>
    <?php
    include("condb.php"); // เชื่อมต่อฐานข้อมูล
    $query_case = "SELECT c.*,u.u_name,u.u_lastname,s.status_name,u.u_tel,u.u_email,s.status_id,u.building,u.floor,u.room
                FROM tbl_case as c
                INNER JOIN tbl_login as u ON c.user_id = u.user_id
                INNER JOIN tbl_status as s ON c.status_id = s.status_id
				order by case_id asc" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $query_case);
    //   echo $query_case;
    //   exit();
    ?>

    <div class="content-wrapper py-3">
      <?php
      if (@$_GET['do'] == 'success') {
        echo '<script type="text/javascript">
              swal("", "มอบงานแล้ว !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=index.php" />';
      } ?>

      <section class="content ">
        <div class="container-fluid ">
          <div class="col-md-12">
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'add') {
              include('case_give_work.php');
            } elseif ($act == 'edit') {
              include('');
            } else {
              include('case_list.php');
            }
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