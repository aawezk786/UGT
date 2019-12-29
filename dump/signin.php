
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/signin.css">
</head>
<body>
<form class="form-signin" method="post" action="signin_db.php">
  <img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72" style="background: black;border-radius: 20%;">
  <h1 class="h3 mb-3 font-weight-normal" align="center">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <div align="center" class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  <button class="btn btn-lg  btn-block  btn-outline-primary" name="signin" type="submit" style="padding-right:.6em;padding-left:.6em;border-radius:10rem ; display:block;width:50%; line-height:1.3; font-weight:bold;" >Sign in</button>
</div>




<br>
  <div align="right" style="font-size: 18px ;font-weight:normal;">
    <a href="signup.php" class="badge badge-pill badge-light" style="float: left;">create account</a>
    
    <a href="#" class="badge badge-pill badge-light" style="float: right;">forget password ?</a>
  </div>
</form>	


</body>
</html>
