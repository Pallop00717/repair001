<?php
session_start();
?>
<style>
  
</style>
<aside class="main-sidebar sidebar-dark-danger elevation-4">

  <a href="#" class="brand-link text-center">
    <span class="brand-text  text-white ">แจ้งซ่อมหอพัก RMUTT</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">       //ใส่รูปโปรไฟล์
      </div> -->
      <div class="info">
        <a href="index.php" class="d-block"> คุณ : <?php echo $_SESSION['u_name']; ?> <br>
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
            <i class="nav-icon fas fa-th-list"></i>
            <p>รายการแจ้งซ่อม</p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="#" class="nav-link <?php if ($menu == "form") {
                                        echo "active";
                                      } ?> ">
            <i class="nav-icon fa fa-file-pdf"></i>
            <p>แบบคำของเบิกวัสดุ</p>
          </a>
        </li> -->
        <li class="nav-item">
              <a href="case_worker.php" class="nav-link <?php if ($menu == "case_worker") {
                                                      echo "active";
                                                    } ?> ">
                <i class="nav-icon fas fa-edit"></i>
                <p>ตารางงานช่างซ่อม</p>
              </a>
            </li>
        <li class="nav-item">
              <a href="worker.php" class="nav-link <?php if ($menu == "worker") {
                                                      echo "active";
                                                    } ?> ">
                <i class="nav-icon fas fa-edit"></i>
                <p>จัดการข้อมูลช่าง</p>
              </a>
            </li>
       
            <li class="nav-item">
              <a href="student.php" class="nav-link <?php if ($menu == "student") {
                                                      echo "active";
                                                    } ?> ">
                <i class="nav-icon fas fa-edit"></i>
                <p>จัดการข้อมูลนักศึกษา</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="admin_profile.php" class="nav-link <?php if ($menu == "admin_profile") {
                                                            echo "active";
                                                          } ?> ">
                <i class="nav-icon fa fa-id-card"></i>
                <p>จัดการข้อมูลส่วนตัว</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="room.php" class="nav-link <?php if ($menu == "room") {
                                                            echo "active";
                                                          } ?> ">
                <i class="nav-icon fa fa-id-card"></i>
                <p>จัดการข้อมูลห้องพัก</p>
              </a>
            </li>
        <li class="nav-header">ออกจากระบบ</li>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link " onclick="return confirm('ยืนยันออกจากระบบ !!');">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p class="text-danger">ออกจากระบบ</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>