<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<form action="login-php.php" method="post">
				<div class="group">
					<label for="username" class="label">Username</label>
					<input name="username" type="text" class="input">
				</div>
				
				
				<div class="group">
					<label for="password" class="label">Password</label>
					<input name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<button class="button" name="login">Login</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div></form action="signup.php" method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Firstname</label>
					<input id="user" type="text" class="input">
					<label for="user" class="label">Lastname</label>
					<input id="user" type="text" class="input">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input">
					<label for="user" class="label">Phone</label>
					<input id="user" type="tel" class="input">
				</div>
				
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  
</body>
</html>
