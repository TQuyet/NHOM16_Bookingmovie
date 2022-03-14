<?php include('header.php'); ?>
<div class="d-flex justify-content-center">
  <div class="wrap">
    <div class="content-top" style="min-height:300px;padding:50px;">
      <div class="col-md-12 ">
        <div class="panel panel-default">
          <div class="mb-3" style="text-align:center; font-size:30px">Đăng kí</div>
          <div class="panel-body">
            <?php include('msgbox.php'); ?>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <title>Sign Up</title>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <style>
                body {
                  font: 14px sans-serif;
                }

                .wrapper {
                  width: 360px;
                  padding: 20px;
                }
              </style>
            </head>

            <body>
              <div class="wrapper">
                <form action="process_signup.php" method="post">
                  <div class="form-group">
                    <label>Acount</label>
                    <input type="text" name="email" class="form-control" size="25" placeholder="Tài khoản">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control" size="25" placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" class="form-control" size="25" placeholder="Nhập lại mật khẩu">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btnsignup" class="btn btn-primary" value="Đăng kí">
                    <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                  </div>
                  <p>Đã có tài khoản ? <a href="login.php">Đăng nhập</a>.</p>
                </form>
              </div>
            </body>

            </html>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>