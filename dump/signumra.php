<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/signup.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
	<div class="baux" >
       <form class="form-signin" autocomplete="off" method="POST" action="umrago/signup_db.php" >
       <div align="center">
       <h1 style="font-family: Satisfy; color: black">UmraGo</h1>
    </div>
    
  <label for="firstname" class="sr-only ">First Name</label>
  <input type="text" id="firstname" class="form-control button1"  placeholder="First Name" name="first_name" required>
 

  <label for="lastname" class="sr-only">Last Name</label>
  <input type="text" id="lastname" class="form-control button1" placeholder="Last Name" name="last_name" required>


  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control button1" placeholder="Email address" name="email" required >
  <label for="inputnumber" class="sr-only">Contact</label>
  <input type="number" id="inputnumber" class="form-control button1" placeholder="Contact No." name="contact" required>
  
  <label for="inputpassword" class="sr-only">password</label>
  <input type="password" id="inputPassword" class="form-control button1" placeholder="password" name="password" required >
  <label for="confirmpassword" class="sr-only">password</label>
  <input type="password" id="confirmpassword" class="form-control button1" placeholder="Confirm password" required >
 

 


  <div  align="center" class="checkbox mb-3">
  <button class="btn btn-lg  btn-block  btn-outline-dark" type="submit" name="signup" style="padding-right:.6em;padding-left:.6em;border-radius:10rem ; display:block;width:50%; line-height:1.1; font-weight:bold;margin-top: 25px" >sign up</button>

</div>


   </form>	
</div>


</body>
</html>
