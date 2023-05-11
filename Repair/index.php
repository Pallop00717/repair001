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
  <title>เข้าสู่ระบบ</title>
</head>

<style>
  .text1{
    overflow: hidden;
    color:  hsl(218, 81%, 95%);
    white-space: nowrap;
    width: 18ch;
    animation: typing 3s steps(18);
    cursor: 2s step-start infinite;
    font-size:50px;
    font-weight: bold;
  }
  span{
    color: hsl(218, 81%, 75%) ;
    font-size:30px;
    text-align: center;
    width: 18ch;
  }
  @keyframes cursor {
    0%{
      border-color:hsl(218, 81%, 95%); ;
    }
    50%{
      border-color: transparent;
    }
    100%{
      border-color: hsl(218, 81%, 95%);;
    }
  }
  @keyframes typing {
    from{
      width: 0% ;
    }
  }
</style>
<body>
  <section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">

        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="text1">
            เว็บแจ้งซ่อมหอพัก <br> 
          </h1>
          <span>มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</span>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <div class="header d-flex justify-content-center mb-3">
                <h3 style="color: hsl(218, 90%, 65%)">เข้าสู่ระบบ</h3>
              </div>
              <hr>

              <form action="check_login.php" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="username" name="username" class="form-control" required />
                  <label class="form-label" for="username">ชื่อผู้ใช้</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" name="password" required />
                  <label class="form-label" for="password">รหัสผ่าน</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-end mb-4">
                  <a href="register.php">สมัครสมาชิก</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  เข้าสู่ระบบ
                </button>
                <p class="text-center">ติดต่อเจ้าหน้าที่ เบอร์ : 0xx-xxxx-xxx</p>
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