<?php
session_start();
?>

<style>
  .main-sidebar {
    background-color: hsl(218, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(218, 41%, 35%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%),
      radial-gradient(1250px circle at 100% 100%,
        hsl(218, 41%, 45%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%);
    height: auto;
  }
</style>
<aside class="main-sidebar sidebar-dark-primary">
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
           <i class="nav-icon fas fa-edit"></i>
            <p>รายการที่แจ้งซ่อม</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="case.php" class="nav-link <?php if ($menu == "case") {
                                                echo "active";
                                              } ?> ">
            <i class="nav-icon fas fa-wrench"></i>
            <p>แจ้งซ่อม</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="case_show.php" class="nav-link <?php if ($menu == "case_show") {
                                                    echo "active";
                                                  } ?> ">
            <i class="nav-icon fa fa-table"></i>
            <p>รายการแจ้งซ่อม</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="student_profile.php" class="nav-link <?php if ($menu == "student_profile") {
                                                          echo "active";
                                                        } ?> ">
            <i class="nav-icon fa fa-id-card"></i>
            <p>จัดการข้อมูลส่วนตัว</p>
          </a>
        </li>
        <li class="nav-header">ออกจากระบบ</li>
        <li class="nav-item" >
          <a href="../logout.php" class="nav-link " onclick="return confirm('ยืนยันออกจากระบบ !!');" >
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p class="text-danger">ออกจากระบบ</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>