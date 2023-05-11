<?php
session_start();
?>
<style>
  .main-sidebar {
    background: rgb(2,0,36);
background: linear-gradient(33deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);

  }
</style>
<aside class="main-sidebar sidebar-dark-danger elevation-4">

  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light">แจ้งซ่อมหอพัก RMUTT</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      </div>
      <div class="info">
        <a href="index.php" class="d-block">
          คุณ : <?php echo $_SESSION['u_name']; ?>
          <br>
          สถานะ : <?php echo $_SESSION['user_level']; ?></a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ระบบ</li>
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php if ($menu == "index") {
                                                echo "active";
                                              } ?> ">
            <i class="nav-icon fa fa-bell"></i>
            <p>ดูงานแจ้งซ่อม</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="case_sent.php" class="nav-link <?php if ($menu == "case_sent") {
                                                    echo "active";
                                                  } ?> ">
            <i class="nav-icon fas fa-edit"></i>
            <p>งานซ่อมของฉัน</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link <?php if ($menu == "") {
                                        echo "active";
                                      } ?> ">
            <i class="nav-icon fa fa-file"></i>
            <p>ใบเบิกวัสดุ</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="case_success.php" class="nav-link <?php if ($menu == "case_success") {
                                                        echo "active";
                                                      } ?> ">
            <i class="nav-icon fa fa-check"></i>
            <p>งานที่ต้องซ่อมสำเร็จ</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="worker_profile.php" class="nav-link <?php if ($menu == "worker_profile") {
                                                          echo "active";
                                                        } ?> ">
            <i class="nav-icon fa fa-id-card"></i>
            <p>จัดการข้อมูลส่วนตัว</p>
          </a>
        </li>
        <li class="nav-header">ออกจากระบบ</li>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link" onclick="return confirm('ยืนยันออกจากระบบ !!');">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p class="text-danger">ออกจากระบบ</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>