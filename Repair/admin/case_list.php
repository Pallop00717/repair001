<div class="card py-4 px-3">
  <h3>รายการแจ้งซ่อมจาก : นักศึกษา</h3>
  <hr>
  <table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
      <tr role="row" class="info">
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ID</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้แจ้ง</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่องาน</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">รายละเอียดงาน</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สถานที่</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วัน-เวลา</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">แจกงาน</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) {
        $i += 1   ?>
        <tr>
          <td>
            <?php echo $row['case_id']; ?>
          </td>
          <td>
            <?php echo $row['u_name'] . ' ' . $row['u_lastname'] ?>
          </td>
          <td>
            <?php echo $row['name_case']; ?>
          </td>
          <td>
            <?php echo $row['detail_case']; ?>
          </td>
          <td>
            <?php echo 'ตึกที่:' . $row['building'] . ' ชั้นที่:' . $row['floor'] . ' ห้องที่:' . $row['room'] ?>
          </td>
          <td>
            <?php echo $row['status_name']; ?>
          </td>
       
          <td>
            <?php echo date("d-m-Y , H:i:s", strtotime($row['date_case'])); ?>
          </td>
          <td>
            <?php if ($row['status_id'] == 1) { ?>
              <a href="index.php?act=add&case_id=<?php echo $row['case_id']; ?>" class="btn btn-block btn-success btn-flat">เลือกช่าง</a>
            <?php } elseif ($row['status_id'] == 2) { ?>
              <a class="btn btn-danger btn-flat">มอบแล้ว</a>
            <?php } ?>

          </td>
        <?php } ?>
        </tr>
    </tbody>
  </table>

</div>