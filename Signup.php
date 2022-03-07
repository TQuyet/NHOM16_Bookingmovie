<?php include('header.php'); ?>

<body class="text-left form-left">
  <main class="form-signup">
    <div class="container">
      <div class="signup-form">
        <form action="register_a.php" method="post" enctype="multipart/form-data">
          <h2>Đăng kí</h2>
          <p class="hint-text">Tạo tài khoản</p>
          <div class="container row">
          <div class="form-group">
            <div class="row">
              <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
              <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
          </div>
          <div class="form-group">
            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
          </div>
          <div class="form-group">
            <button type="submit" name="save" class="btn btn-primary btn-lg btn-block">Đăng kí</button>
          </div>
          <div class="text-center">Đã có tài khoản ? <a href="login.php">Đăng nhập</a></div>
          </div>
        </form>

      </div>
    </div>
  </main>
</body>