<!DOCTYPE html>
<html lang="en">
<?php $menu = "case_show"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("navbar.php"); ?>
        <?php include("menu.php"); ?>
        <?php
            include("condb.php");
            $query_case = "SELECT c.*,u.u_name,u.u_lastname,s.status_name,u.u_tel,u.u_email,u.building,u.floor,u.room
                                FROM tbl_case as c
                                INNER JOIN tbl_login as u ON c.user_id = u.user_id
                                INNER JOIN tbl_status as s ON c.status_id = s.status_id
                                WHERE u.user_id = $user_id
                                order by case_id asc" or die("Error:" . mysqli_error());
            $result = mysqli_query($con, $query_case);
            // echo $query_case;
            // exit();
            ?>

        <div class="content-wrapper">
            <?php
            if (@$_GET['do'] == 'success') {
                echo '<script type="text/javascript">
              swal("", "ทำรายการสำเร็จ !!", "success");
              </script>';
                echo '<meta http-equiv="refresh" content="1;url=case_show.php" />';
            } else if (@$_GET['do'] == 'finish') {
                echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
                echo '<meta http-equiv="refresh" content="1;url=case_show.php" />';
            } else if (@$_GET['do'] == 'f') {
                echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
                echo '<meta http-equiv="refresh" content="1;url=case_show.php" />';
            } ?>
            <div class="container col-md-12 my-3">
                        <?php
                        $act = (isset($_GET['act']) ? $_GET['act'] : '');
                        if ($act == 'add') {
                            include('');
                        } elseif ($act == 'student') {
                            include('');
                        } else {
                            include('case_list.php');
                        }
                        ?>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <?php include("script.php"); ?>
</body>

</html>