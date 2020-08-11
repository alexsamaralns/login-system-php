<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Login Example</title>
</head>
<body>
	<div class="box-login">
		<div class="login-img">			
		</div>
		<h1 class="login-title">Sing in</h1>
		<form method="post" action="/login/check">
			<input type="email" name="email" placeholder="E-mail">
			<input type="password" name="password" placeholder="Password">
			<button class="btn-login">Login</button>
			<span class="msg-error"><i class="fas fa-exclamation-triangle"></i>Invalid attempt</span>
		</form>
	</div>
</body>
</html>