<?php /* Smarty version 2.6.13, created on 2012-06-26 15:02:45
         compiled from closeup/login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CLOSE UP</title>
<meta charset="utf-8" />
<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
<link rel="stylesheet" type="text/css" href="css/closeup.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/animation.css" media="all" />
</head>
<body>
	
    <div id="login">
        <a class="logo" href="index.html">&nbsp;</a>
    	<div class="bgblue imgHolder"><img src="images/bgblue.png" /></div>
				<?php if ($this->_tpl_vars['login_error']): ?>
				<script>
					alert("Maaf, username dan/atau password salah !");
				</script>
				<?php endif; ?>
				<form action="index.php?page=login&act=loginSession" class="login-form" method="post" enctype="application/x-www-form-urlencoded">
					<div class="row"><input name="username" id="username" type="text" value="Email" /></div>
					<div class="row"><input name="password" id="password" type="password" value="" /></div>
					<input name="login" id="login" type="hidden" value="1" />
					<div class="row"><input type="submit" value="LOGIN" class="btn-login" /></div>
				</form>
    </div>
</body>
</html>