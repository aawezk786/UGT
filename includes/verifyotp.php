<!DOCTYPE html>
<?php
session_start();
include"../includes/db_conn.php";
?>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="../css/loginreg.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container-fluid">
    <div class="form control">
  <div class="row">
    <div class="col-sm-4">
     <div class="jumbotron">
     <h1 class="display-3">Umra Go</h1>
     <p>It can be performed along with Hajj and on other days as well. According to Quran: “—accomplish Hajj and Umrah to please Allah”. The principle of mahram is important since it regulates everyday human interaction and clearly demarcates the boundaries of permissible human interaction and social activities</p>
     <hr   class="my-4">
     <!-- <a href="" class="btn btn-info">learn more</a> -->
    </div>
    </div>
    <div class="col-sm-8">
 <div class="loginbox" id="logindiv">
    <img src="../umrago pics/avatar.png" class="avatar">

     <h1>Verify Otp</h1>
     <label><?php  echo "Otp Successfully send to   " . $_SESSION['contact_session']; ?></label>
        <form class="form-signin" method="post" action="verifyotp.php">
            <input type="text" id="otp"  placeholder="enter otp" name="otp"  >

       <button type="submit" class="btn btn-primary btn-lg btn-block" name="verify_ins" id="ver_otp">Verify OTP </button>
<!---------------------------------------------------------------------------------->
           
<!---------------------------------------------------------------------------------->
          </form>
        </div>
</body>
</html>
<?php
if(isset($_POST['verify_ins']))
    {
    									$otp = $_POST['otp'];
    								$full_name	= $_SESSION['full_name_session'];
    $email = $_SESSION['email_session'];
    $password	= $_SESSION['password_session'];
    $contact	= $_SESSION['contact_session'];
    									if($_SESSION['otp'] == $otp) {
											 echo "<script>alert('Your Mobile Number is verified')</script>";
											  $query = "INSERT INTO agents(agent_name,agent_contact,agent_email,agent_password) VALUES('$full_name','$contact','$email','$password')";
						      	 	 $signup = mysqli_query($connection,$query);
						      	 	 	echo "<script>window.open('../index.php','_self')</script>";
										} else {
											echo "<script>alert('Please Correct Otp')</script>";
										}



}






?>