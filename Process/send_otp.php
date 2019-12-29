<?php
session_start();
  include"../includes/db_conn.php";
     if(isset($_POST['send_otp']))
    {
    	 $full_name = $_POST['full_name'];
		 $email = mysqli_escape_string($connection,$_POST['email']);
		 $password = md5($_POST['password']);
    	 $contact = $_POST['contact'];
       $company_name = $_POST['company_name'];
    	 $_SESSION['full_name_org_session'] = $full_name;
    	 $_SESSION['email_org_session'] = $email;
    	 $_SESSION['password_org_session'] = $password;
    	 $_SESSION['contact_org_session'] = $contact;
       $_SESSION['company_name_session'] = $company_name;
    						

    					 $otp = mt_rand(10000, 99999);
    					 $_SESSION['otp_org'] = $otp;

              

   					  $text="Hello " . $full_name . " This is your OTP: " . $otp;
						  					  
   					 
   					  
   					  
   					  $url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=JFWIL5IGWFN6KOP4E4K5YAR0Q583WVR8&secret=1NCHFM45BP628W4W&usetype=stage&phone=$contact&senderid=testmailumrago@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
echo "<script>window.open('../includes/ver_org.php','_self')</script>";
}

										
										



									    
										
									

						    
						   




						?>