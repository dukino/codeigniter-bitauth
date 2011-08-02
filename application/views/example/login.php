<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style type="text/css">
		body { margin: 0; padding: 0; font-size: 10pt; font-family: Verdana, Arial, sans-serif; }
		form { width: 400px; margin: 60px auto 0 auto; padding: 10px; border: 1px solid #666; }
		label, input[type=text], input[type=password] { display: block; width: 100%; }
		#bottom { width: 400px; padding: 10px; margin: 0 auto; }
	</style>
	<title>BitAuth: Login</title>
</head>
<body>
<?php
	echo form_open(current_url());
	echo form_label('Username','username');
	echo form_input('username');
	echo form_label('Password','password');
	echo form_password('password');
	echo form_label(form_checkbox('remember_me').' Remember Me', 'remember_me');
	echo form_submit('login','Login');
	echo form_close();
	echo '<div id="bottom">Username: <strong>admin</strong><br/>Password: <strong>admin</strong></div>';
?>
</body>
</html>
