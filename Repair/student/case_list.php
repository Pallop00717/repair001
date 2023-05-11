<?php include("condb.php"); ?>

<div class="card px-4 py-4">
  <h2>รายการงานที่แจ้งซ่อม</h2>
  <hr>
  <table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
      <tr role="row" class="info">
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ผู้แจ้ง</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่องาน</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รายละเอียดงาน</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ตึก-ชั้น-ห้อง</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานะ</th>
        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">วัน-เวลา</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
        <tr>
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

        <?php } ?>
        </tr>
    </tbody>
  </table>
</div>