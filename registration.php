<?php include('header.php');?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
  <?php
    include('form.php');
    $frm=new formBuilder;      
  ?> 
</div >
<div class="d-flex justify-content-center">
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default mb-2">
				  <div class="panel-heading ">Đăng ký</div>
				  <div class="panel-body">
				<form action="process_registration.php" method="post" id="form1">
				    <div class="form-group has-feedback mb-2">
        <input name="name" type="text" size="25" placeholder="Tên" class="form-control"/>
        <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <input name="age" type="text" size="25" placeholder="Tuổi" class="form-control"/>
        <?php $frm->validate("age",array("required","label"=>"Age","regexp"=>"age")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <select name="gender" class="form-control">
            <option value>Chọn giới tính</option>
            <option>Nam</option>
            <option>Nữ</option>
        </select>
        <?php $frm->validate("gender",array("required","label"=>"Gender")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <input name="phone" type="text" size="25" placeholder="SDT" class="form-control"/>
        <?php $frm->validate("phone",array("required","label"=>"Mobile Number","regexp"=>"mobile")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <input name="email" type="text" size="25" placeholder="Email" class="form-control"/>
        <?php $frm->validate("email",array("required","label"=>"Email","email")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <?php $frm->validate("password",array("required","label"=>"Password","min"=>"7")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback mb-2">
        <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        <?php $frm->validate("cpassword",array("required","label"=>"Confirm Password","min"=>"7","identical"=>"password Password")); // Validating form using form builder written in form.php ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Continue</button>
      </div>
      </div>
    </div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>
</div>

<script>
        <?php $frm->applyvalidations("form1");?>
    </script>