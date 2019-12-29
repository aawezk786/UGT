<?php
session_start();
include"../includes/db_conn.php";
 if(isset($_POST['submit_airlines']))
 {
 	$organizer_id = $_SESSION['organizer_email_session'];
 	$airline_name = mysqli_escape_string($connection,$_POST['airline_name']);
 	$duo_price = mysqli_escape_string($connection,$_POST['duo_price']);
 	$trio_price = mysqli_escape_string($connection,$_POST['trio_price']);
 	$quad_price = mysqli_escape_string($connection,$_POST['quad_price']);
 	$quint_price = mysqli_escape_string($connection,$_POST['quint_price']);
 	$co_2year_child = mysqli_escape_string($connection,$_POST['o_2year_child']);
 	$c2_6year_child = mysqli_escape_string($connection,$_POST['2_6year_child']);
 	$c6_12year_child = mysqli_escape_string($connection,$_POST['6_12year_child']);
 	$return_ticket = mysqli_escape_string($connection,$_POST['return_ticket']);

 	$query = "INSERT INTO airlines(organizer_id,airlines_name,duo_price,trio_price,quad_price,quint_price,0_2year_child,2_6year_child,6_12year_child,return_ticket) VALUES ('$organizer_id','$airline_name','$duo_price','$trio_price','$quad_price','$quint_price','$co_2year_child','$c2_6year_child','$c6_12year_child','$return_ticket')";

 	 $insert_airlines = mysqli_query($connection,$query);

   	 	           comfirmquery($insert_airlines);
        echo "<script>alert(' added Successfull')</script>";

       echo "<script>window.open('../includes/airlines.php','_self')</script>";



 }



?>