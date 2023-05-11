<!DOCTYPE html>
<html lang="en">
<?php $menu = "student"; ?>
<?php include("head.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include("navbar.php"); ?>
    <?php include("menu.php"); ?>

    <div class="content-wrapper">
      <?php
      if (@$_GET['do'] == 'success') {
        echo '<script type="text/javascript">
              swal("", "ทำรายการสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=student.php" />';
      } else if (@$_GET['do'] == 'finish') {
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=student.php" />';
      } else if (@$_GET['do'] == 'f') {
        echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=student.php" />';
      } ?>

      <section class="content">
        <h2 class="pt-3">จัดการข้อมูล : นักศึกษา</h2>
        <div class="container-fluid ">
          <p><button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#myModal"> +เพิ่มข้อมูล</button>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <form action="student_db.php" method="post" accept-charset="utf-8">
                  <div class="modal-header">
                    <h4 class="modal-title">เพิ่มข้อมูล : นักศึกษา</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" required name="username">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="text" class="form-control" required name="password" maxlength="4">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">ชื่อ:</label>
                        <input type="text" class="form-control" required name="u_name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">นามสกุล:</label>
                        <input type="text" class="form-control" required name="u_lastname">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร:</label>
                        <input type="text" class="form-control" required name="u_tel" maxlength="10">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">อีเมล์:</label>
                        <input type="email" class="form-control" required name="u_email">
                      </div>
                      <div class="input-group mb-3 col-md-4">
                        <span class="input-group-text" id="basic-addon1">ตึกที่</span>
                        <input type="text" class="form-control" aria-label="build"  name="building" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3 col-md-4">
                        <span class="input-group-text" id="basic-addon2">ชั้นที่</span>
                        <input type="text" class="form-control" aria-label="floor"  name="floor" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group mb-3 col-md-4">
                        <span class="input-group-text" id="basic-addon3">ห้องที่</span>
                        <input type="text" class="form-control" aria-label="room"  name="room" aria-describedby="basic-addon3">
                      </div>

                    </div>
                    <!-- <div class="row">
                      <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">สถานะ:</label>
                        <select name="m_level" class="form-control" required disabled>
                          <option value="student">-student-</option>
                        </select>
                      </div>

                    </div> -->
                  </div>

                  <div class="modal-footer">
                    <input type="hidden" name="user_level" value="student">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <?php include('student_list.php'); ?>
          </div>

        </div>
      </section>
    </div>
  </div>

  <?php include("footer.php"); ?>
  <?php include("script.php"); ?>
</body>

</html>