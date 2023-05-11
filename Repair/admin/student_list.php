<div class="card py-4 px-3">
  <h3>จัดการข้อมูล : นักศึกษา</h3>
  <p><button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#myModal"> +เพิ่มข้อมูล</button>
    <hr>
  <table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
      <tr role="row" class="info">
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">username</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ-สกุล</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">อีเมล์</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เบอร์โทร</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ตึก-ห้อง-ชั้น</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
        <tr>
          <td>
            <?php echo $row['user_id']; ?>
          </td>
          <td>
            <?php echo $row['username']; ?>
          </td>
          <td>
            <?php echo $row['u_name'] . ' ' . $row['u_lastname'] ?>
          </td>
          <td>
            <?php echo $row['u_email']; ?>
          </td>
          <td>
            <?php echo $row['u_tel']; ?>
          </td>
          <td>
            <?php echo 'ตึกที่:' . $row['building'] . ' ชั้นที่:' . $row['floor'] . ' ห้องที่:' . $row['room'] ?>
          </td>
          <td>
            <?php echo $row['user_level']; ?>
          </td>
          <td align='center'>
            <a class="btn btn-warning  btn-sm" href="student_edit.php?act=edit&user_id=<?php echo $row['user_id']; ?>">
              แก้ไข
            </a>
          </td>
          <td align='center'>
            <a class="btn btn-danger  btn-sm" href="student_del.php?user_id=<?= $row['user_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
              ลบ
            </a>
          </td>
        <?php } ?>
        </tr>
    </tbody>
  </table>
</div>

<!-- model add student!-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content px-3">
      <form action="student_db.php" method="post" accept-charset="utf-8">

        <div class="modal-header">
          <h4 class="modal-title">เพิ่มข้อมูล : นักศึกษา</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="row mb-3">
          <div class="col-6">
            <!-- <label class="form-label" for="username">ชื่อผู้ใช้</label> -->
            <input type="text" id="username" name="username" required class="form-control form-control-lg" placeholder="ชื่อผู้ใช้" />
          </div>
          <div class="col-6">
            <!-- <label class="form-label" for="u_tel">เบอร์มือถือ</label> -->
            <input type="text" id="u_tel" name="u_tel" required class="form-control form-control-lg" placeholder="เบอร์มือถือ" maxlength="10" />
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
            <!-- <label class="form-label" for="u_name">ชื่อ</label> -->
            <input type="text" id="u_name" name="u_name" required class="form-control form-control-lg" placeholder="ชื่อ" />
          </div>
          <div class="col-6">
            <!-- <label class="form-label" for="u_lastname">นามสกุล</label> -->
            <input type="text" id="u_lastname" name="u_lastname" required class="form-control form-control-lg" placeholder="นามสกุล" />
          </div>
        </div>

        <div class="mb-3">
          <!-- <label class="form-label" for="u_email">อีเมล</label> -->
          <input type="email" id="u_email" name="u_email" required class="form-control form-control-lg" placeholder="อีเมล" />
        </div>

        <div class="row mb-3">
          <div class="form-group col-md-4 ">
            <!-- <label>ตึกที่</label> -->
            <select id="inputState" name="building" class="form-control" required>
              <option selected="">ตึกที่</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div> <!-- form-group end.// -->

          <div class="form-group col-md-4">
            <!-- <label>ชั้นที่</label> -->
            <select id="inputState" name="floor" class="form-control" required>
              <option selected="">ชั้นที่</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div> <!-- form-group end.// -->

          <div class="form-group col-md-4">
            <!-- <label>ห้องที่</label> -->
            <input type="text" name="room" class="form-control" required maxlength="4" value="ห้องที่">
          </div> <!-- form-group end.// -->
        </div>

        <div class="row mb-2">
          <div class="col-6 ">
            <!-- <label class="form-label" for="password">รหัสผ่าน</label> -->
            <input type="password" id="password" name="password" required class="form-control form-control-lg" placeholder="รหัสผ่าน" minlength="6" />
          </div>
          <!-- <div class="col-6">
                    <label class="form-label" for="cf_password">ยืนยันรหัสผ่าน</label>
                    <input type="password" id="cf_password" name="password" required class="form-control form-control-lg" placeholder="กรุณายืนยันรหัสผ่าน" />
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
<!-- /model add student!-->