<?php include('header.php'); ?>
<?php
include('config.php');
$qry2 = mysqli_query($con, "select * from tbl_login where user_id='" . $_GET['id'] . "'");
$user = mysqli_fetch_array($qry2);
?>
<main>
    <div class="container">
        <h3 class="text-center text-primary mt-5">Cập nhật Thông Tin Người Dùng ( <?php echo $user['name']; ?>)</h3>
        <form action="process_update_user.php" method="post">
        <div class="form-group">
                <label for="txtid">Id của người dùng</label>
                <input type="text" disabled="disabled" class="form-control" id="txtid" name="iduser" placeholder="" value="<?php echo $user['id']; ?>">
            </div>
            <div class="form-group">
                <label for="txtten">Họ và tên</label>
                <input type="text" class="form-control" id="txtten" name="ten" placeholder="" value="<?php echo $user['name']; ?>">
            </div>

            <div class="form-group">
                <label for="txtngaysinh">Ngày sinh</label>
                <input type="text" class="form-control" id="txtngaysinh" name="ns" placeholder="" value="<?php echo $user['date_of_birth']; ?>">
            </div>

            <div class="form-group">
                <label for="txtgioitinh">Giới tính</label>
                <input type="text" class="form-control" id="txtGiới tính" name="gioitinh" placeholder="" value="<?php echo $user['gender']; ?>">

            </div>
            <div class="form-group">
                <label for="txtsdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtsdt" name="sdt" placeholder="" value="<?php echo $user['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="txthinhanh">Địa chỉ</label>
                <input type="text" class="form-control" id="txtdiachi" name="diachi" placeholder="" value="<?php echo $user['address']; ?>">
            </div>
            <div class="form-group">
                <label for="txthinhanh">Ảnh đại diện</label>
                <input type="text" class="form-control" id="txtha" name="hinhanh" placeholder="" value="<?php echo $user['image']; ?>">
                <button type="submit" name="btnsave" class="btn btn-primary" value="luu lai">Cập nhật</button>
        </form>
    </div>
</main>