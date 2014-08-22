<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elisium - Login Ke Akun Anda</title>

<link href="style/login-style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
	<div id="logo-header">
    	<img src="image/logo.png" />
    </div>
    
    <div id="container">
    <div id="box">
            <section class="main">
                    <form class="form1" action="lanjut.php" method="post">
					<p class="field">
						<input type="text" name="login" placeholder="Username or email" autocomplete="off">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
                    <div class="signOpt">
                    <div id="forgot">
                    <a href="#"><h4>Forgot Password ?</h4></a></div>
                                       <div id="signUp"><a href="#"><h4>Don't have an account ? <strong>Sign Up</strong></h4></a></div></div>

				</form>
                <div id="wayang">
                </div>
				
               </section>
               </div>
    </div>
    
    <div id="footer">
    	<ul>
        	<li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Get Started</a></li>
        </ul>
    </div>
</body>
</html>