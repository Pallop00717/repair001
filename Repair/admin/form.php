<!DOCTYPE html>
<html lang="en">
<?php $menu = "form"; ?>
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
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } else if (@$_GET['do'] == 'finish') {
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } else if (@$_GET['do'] == 'f') {
        echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=worker.php" />';
      } ?>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="invoice p-3 mb-3">

                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="fas fa fa-file-pdf"></i> ใบเบิกวัสดุ
                      <small class="float-right">วันที่</small>
                    </h4>
                  </div>

                </div>

                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    ชื่อ-สกุล
                    <address>
                      <strong>Admin, Inc.</strong><br>
                    </address>
                  </div>

                  <div class="col-sm-4 invoice-col">
                    To
                    <address>
                      <strong>John Doe</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Phone: (555) 539-1037<br>
                      Email: john.doe@example.com
                    </address>
                  </div>

                  <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment Due:</b> 2/22/2014<br>
                    <b>Account:</b> 968-34567
                  </div>

                </div>


                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ลำดับ</th>
                          <th>ชื่อวัสดุ</th>
                          <th>จำนวน</th>
                          <th>ลายเซ็น</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                  </div>

                </div>

                <div class="row no-print">
                  <div class="col-12">
                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include("footer.php"); ?>
  <?php include("script.php"); ?>
</body>

</html>