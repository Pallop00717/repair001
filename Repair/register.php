<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <!-- css -->
  <link rel="stylesheet" href="./css/home.css">
  <title>สมัครสมาชิก</title>
</head>

<body>
  <section class="background-radial-gradient overflow-hidden">

    <div class="container px-4 py-1 px-md-5 text-center text-lg-start my-4">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class=" display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            เว็บแจ้งซ่อมหอพัก
          </h1>
          <span style="color: hsl(218, 81%, 75%); font-size: 30px; ">มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</span>

        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <div class="header d-flex justify-content-center mb-3">
                <h3 style="color: hsl(218, 90%, 65%)">สมัครสมาชิก</h3>
              </div>
              <hr>
              <form action="check_register.php" method="post">
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

                <div class="form-group col-md-12 mb-4">
                  <!-- <label for="recipient-name" class="col-form-label">สถานะ:</label> -->
                  <select name="user_level" class="form-control" required>
                    <option value="student">student</option>
                  </select>

                </div>
                <!-- Submit button -->
                <div class="mb-4 d-flex justify-content-end">
                  <a href="index.php" class="col-3 btn ">ยกเลิก</a>
                  <button type="submit" class="btn btn-primary col-md-5">
                    เข้าสู่ระบบ
                  </button>
                </div>
                <p class="text-center">ติดต่อเจ้าหน้าที่ เบอร์ : 0xx-xxxx-xxx</p>
                <div class="form-group">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>