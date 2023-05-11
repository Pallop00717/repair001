
<div class="card px-4 py-4">
	<h2>แจ้งซ่อม</h2>
	<hr>
	<form action="case_form_add_db.php" method="post" class="col-12">
		<div class="row">
			<div class="input-group mb-3">
				<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>" aria-describedby="basic-addon1">
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="u_name">ชื่อ</label>
					<input type="text" class="form-control" value="<?php echo $row['u_name']; ?>" name="u_name" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="u_lastname">นามสกุล</label>
					<input type="text" class="form-control" value="<?php echo $row['u_lastname']; ?>" name="u_lastname" required>
				</div>
			</div>
			<div class="col-4 col-md-2">
				<div class="form-group">
					<label for="password">ตึกที่</label>
					<input type="text" class="form-control" value="<?php echo $row['building']; ?>" name="building" disabled>
				</div>
			</div>
			<div class="col-4 col-md-2">
				<div class="form-group">
					<label for="password">ชั้นที่</label>
					<input type="text" class="form-control" value="<?php echo $row['floor']; ?>" name="floor" disabled>
				</div>
			</div>
			<div class="col-4 col-md-2">
				<div class="form-group">
					<label for="password">ห้องที่</label>
					<input type="text" class="form-control" value="<?php echo $row['room']; ?>" name="room" disabled>
				</div>
			</div>
		</div>
		<div class="form-group col-md-6">
			<label>ชื่องาน</label>
			<input type="text" class="form-control" placeholder="แจ้งปัญหางาน" required name="name_case">
		</div>

		<div class="form-group col-md-6">
			<label>รายละเอียดงาน</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="detail_case"></textarea>
		</div>
		<!-- <div class="input-group mb-3 col-md-6">
				<label>ใส่รูปภาพ (ถ้ามี)</label>
				<input type="file" class="form-control" id="inputGroupFile01">
			</div> -->
		<hr>
		<div class="col-md-12 mb-3 mt-3 d-flex justify-content-end">
			<button type="submit" class="btn btn-success">ยืนยันการแจ้งซ่อม</button>
		</div>
	</form>

</div>