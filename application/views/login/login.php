<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Portofolio</title>
  
  
  	
	<link rel="shortcut icon" href="<?php echo base_url();?>file/images/s.jpg">
      <link rel="stylesheet" href="<?php echo base_url()?>dist/login/css/style.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
		<p align="center"><?php echo $this->session->flashdata('gagal'); ?></p>
			</div>
			 <form action="<?php echo base_url()?>login/action_login" method="post">

			<div class="login-form">
				<div class="control-group">
				<input name="username" type="text" class="login-field" value="" placeholder="username" id="login-name" required="true">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input name="password" type="password" class="login-field" value="" placeholder="password" id="login-pass" required="true">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<button type="submit" class="btn btn-primary btn-large btn-block" value="">Login</button>
		
		</form>
				<a class="login-link" href="#">Lost your password?</a>
			</div>
		</div>
	</div>
</body>
  
</html>
