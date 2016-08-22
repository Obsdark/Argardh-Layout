	<div class="widget_title"><img src="layout/images/menu/account.gif">Quick Login</div>
	<div class="spacer_right"></div>
	<div class="quicklogin">
		<form method="post" action="login.php">
			<input type="text" name="username" class="loginfield" placeholder="Account name"/>
			<input type="password" name="password" class="loginfield_pass" placeholder="**********"/>
			<input type="submit" name="Submit" class="loginfield_submit" value="LOGIN"/>
			<?php
				/* Form file */
				Token::create();
			?>
		</form>				
		<div class="loginfield_register">or <a href="register.php">Register</a></div>
	</div>
