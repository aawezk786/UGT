<?php
ob_start();
session_start();
 include"../includes/db_conn.php";

 if(isset($_POST['login']))
    {
    	$email_phone =mysqli_escape_string($connection,$_POST['email_phone']);
        $password = md5($_POST['password']);
        $role = $_POST['role'];

        if($role == "Agent")
        {
         $query = "SELECT * FROM agents WHERE agent_email='$email_phone' OR agent_contact='$email_phone' AND agent_password='$password'";
            $login_query = mysqli_query($connection,$query);
            comfirmquery($login_query);
            if(mysqli_num_rows($login_query) > 0)
            {
                while($data_fetched = mysqli_fetch_assoc($login_query))
                {   
                $agent_id = $data_fetched['agent_id'];
                  $agent_name = $data_fetched['agent_name'];
                   $agent_contact = $data_fetched['agent_contact'];
                   $agent_email= $data_fetched['agent_email'];
                    $_SESSION['agent_id_session'] =	     $agent_id;
                    $_SESSION['agent_name_session'] =   $agent_name;
                    $_SESSION['agent_contact_session'] =	$agent_contact;
                    $_SESSION['agent_email_session'] =   $agent_email;
                   
                }
                echo "<script>window.open('../includes/listing.php','_self')</script>";
            }

              else
            {
                echo "<script>alert('INVALID CREDENTIALS')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            }
           
           // echo "<script>window.open('../includes/listing.php','_self')</script>";
          }
         else if($role == "Organizer")
   {
 $query = "SELECT * FROM organizer WHERE organizer_email='$email_phone' OR organizer_contact='$email_phone' AND organizer_password='$password'";
   $login_query = mysqli_query($connection,$query);
   comfirmquery($login_query);
   	if(mysqli_num_rows($login_query) > 0)
            {
                while($data_fetched = mysqli_fetch_assoc($login_query))
                {   
                $organizer_id = $data_fetched['organizer_id'];
                  $organizer_name = $data_fetched['organizer_name'];
                   $organizer_contact = $data_fetched['organizer_contact'];
                   $organizer_email= $data_fetched['organizer_email'];
                    $organizer_companyname= $data_fetched['organizer_companyname'];
                    $_SESSION['organizer_id_session'] =	     $organizer_id;
                    $_SESSION['organizer_name_session'] =   $organizer_name;
                    $_SESSION['organizer_contact_session'] =	$organizer_contact;
                    $_SESSION['organizer_email_session'] =   $organizer_email;
                    $_SESSION['organizer_companyname_session'] =   $organizer_companyname;
                   
                }
                  echo "<script>window.open('../includes/add_package.php','_self')</script>";
            }
            else
            {
                echo "<script>alert('INVALID CREDENTIALS')</script>";
                echo "<script>window.open('../index.php','_self')</script>";

            }
           // echo "<script>alert('Login Successfull')</script>";            
            	           


        }
        
}
else
    {
        header("Location: ../index.php");
    }
?>