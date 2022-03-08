<?php include('header.php'); ?>
<div class="d-flex justify-content-center">
  <div class="wrap">
    <div class="content-top" style="min-height:300px;padding:50px;">
      <div class="col-md-12 ">
        <div class="panel panel-default">
          <div class="mb-3" style="text-align:center; font-size:30px">Đăng kí</div>
          <div class="panel-body">
            <?php include('msgbox.php'); ?>
            <form action="process_signup.php" method="post">
              <div class="mb-3">
                Họ và Tên<input name="username" type="text" size="25" placeholder="Họ và Tên" class="form-control" placeholder="Họ và Tên" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="mb-3">
                Tài Khoản<input name="email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="mb-3">
                Mật Khẩu
                <input name="password1" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="mb-3">
                Nhập lại Mật Khẩu
                <input name="password2" type="password" size="25" placeholder="Retype Password" class="form-control" placeholder="Retype Password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group 1">
                <button type="submit" name="btnsignup" class="btn btn-primary">Đăng kí</button>
              </div>
              <div>
                <p class="login-box-msg" style="padding-top:20px">Quay trở lại đăng nhập <a href="login.php">Đăng nhập</a></p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>