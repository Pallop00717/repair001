<div class="card py-4 px-3">
  <h3>จัดการข้อมูล : ช่างซ่อม</h3>
  <p><button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#myModal"> +เพิ่มข้อมูล</button>
  <hr>
  <table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
      <tr role="row" class="info">
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">username</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ-สกุล</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">อีเมล์</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">บอร์โทร</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) {   ?>
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
            <?php echo $row['user_level']; ?>
          </td>
          <td align='center'>
            <a class="btn btn-warning  btn-sm" href="worker.php?act=edit&user_id=<?php echo $row['user_id']; ?>">
              แก้ไข
            </a>
          </td>
          <td align='center'>
            <a class="btn btn-danger  btn-sm" href="worker_del.php?user_id=<?= $row['user_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
              ลบ
            </a>

          </td>
        <?php } ?>
        </tr>
    </tbody>
  </table>

<!-- model add worker!-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content px-3">
        <form action="worker_db.php" method="post" accept-charset="utf-8">

          <div class="modal-header">
            <h4 class="modal-title">เพิ่มข้อมูล : ช่างซ่อม</h4>
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
                <input type="text" class="form-control" required name="password" >
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
                <input type="text" class="form-control" required name="u_tel">
              </div>
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">อีเมล์:</label>
                <input type="email" class="form-control" required name="u_email">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">สถานะ:</label>
                <select name="m_level" class="form-control" required disabled>
                  <option value="worker">-worker-</option>
                </select>
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <input type="hidden" name="user_level" value="worker">
            <button type="submit" class="btn btn-success">บันทึก</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /model add worker!-->