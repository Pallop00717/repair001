<div class="card py-4 px-3">
    <h3>จัดการข้อมูลห้องพัก</h3>
    <p><button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#myModal"> +เพิ่มห้อง</button>

</div>

<!-- model add student!-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content px-3">
            <form action="room_db.php" method="post" accept-charset="utf-8">

                <div class="modal-header">
                    <h4 class="modal-title">เพิ่มห้องพัก</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <input type="text" name="building" class="form-control form-control-lg" placeholder="ตึก" />
                    </div>
                    <div class="col-4">
                        <input type="text" name="floor" class="form-control form-control-lg" placeholder="ชั้น" />
                    </div>
                    <div class="col-4">
                        <input type="text" name="room" class="form-control form-control-lg" placeholder="ห้อง" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
<!-- /model add student!-->