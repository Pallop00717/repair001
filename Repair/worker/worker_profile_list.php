    <div class="card py-4 px-4">
        <h2>แก้ไขข้อมูลส้วนตัว : ช่าง</h2>
        <hr>
        <form action="worker_profile_db.php" method="post" accept-charset="utf-8">
            <div class="row mt-3">
                <div class="col-sm-6 ">
                    <div class="form-group">
                        <label for="u_lastname">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">รหัสผ่าน</label>
                        <input type="text" class="form-control" value="<?php echo $row['password']; ?>" name="password" maxlength="4">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="u_name">ชื่อ</label>
                        <input type="text" class="form-control" value="<?php echo $row['u_name']; ?>" name="u_name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="u_lastname">นามสกุล</label>
                        <input type="text" class="form-control" value="<?php echo $row['u_lastname']; ?>" name="u_lastname">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="u_tel">เบอร์มือถือ</label>
                        <input type="text" class="form-control" value="<?php echo $row['u_tel']; ?>" name="u_tel" maxlength="10">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="u_email">อีเมล</label>
                        <input type="email" class="form-control" value="<?php echo $row['u_email']; ?>" name="u_email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?php echo $row['user_id']; ?>" name="user_id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" method="post" class="btn btn-success btn-flat" onclick="return confirm('ยืนยันการไขข้อมูล !!');">แก้ไขข้อมูล</button>
            </div>
        </form>
    </div>