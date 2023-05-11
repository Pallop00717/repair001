<div class="card px-3 py-4">
    <h2>ข้อมูลส่วนตัว</h2>
    <hr>
    <form class="form-check" action="student_profile_db.php" method="post" accept-charset="utf-8">
        <div class="row ">
            <div>
                <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $row['user_id']; ?>" name="user_id" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="u_lastname">ชื่อผู้ใช้</label>
                    <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="u_name">ชื่อ</label>
                    <input type="text" class="form-control" value="<?php echo $row['u_name']; ?>" name="u_name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="u_lastname">นามสกุล</label>
                    <input type="text" class="form-control" value="<?php echo $row['u_lastname']; ?>" name="u_lastname" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password">ตึกที่</label>
                    <input type="text" class="form-control" value="<?php echo $row['building']; ?>" name="building" disabled>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password">ชั้นที่</label>
                    <input type="text" class="form-control" value="<?php echo $row['floor']; ?>" name="floor" disabled>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password">ห้องที่</label>
                    <input type="text" class="form-control" value="<?php echo $row['room']; ?>" name="room" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="u_tel">เบอร์มือถือ</label>
                    <input type="text" class="form-control" value="<?php echo $row['u_tel']; ?>" name="u_tel" maxlength="10" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="u_email">อีเมล</label>
                    <input type="email" class="form-control" value="<?php echo $row['u_email']; ?>" name="u_email" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="col-md-12">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password" value="<?php echo $row['password']; ?>" name="password" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" method="post" class="btn btn-warning" onclick="return confirm('ยืนยันการไขข้อมูล !!');">แก้ไขข้อมูล</button>
        </div>
    </form>
</div>