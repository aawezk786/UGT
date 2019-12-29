<?php
session_start();
include"../includes/db_conn.php";
 if(isset($_POST['submit']))
    {   
        $package_owner = $_SESSION['organizer_email_session'];
    	$packagename = mysqli_escape_string($connection,$_POST['packageName']);
    	$source = mysqli_escape_string($connection,$_POST['source']);
    	$destination = mysqli_escape_string($connection,$_POST['destination']);
    	$no_of_days = mysqli_escape_string($connection,$_POST['days']);
    	$category = mysqli_escape_string($connection,$_POST['category']);
    	$total_seats = mysqli_escape_string($connection,$_POST['total_seats']);
    	$available_seats = mysqli_escape_string($connection,$_POST['available_seats']);
    	$travel_date = mysqli_escape_string($connection,$_POST['travel_date']);
    	$return_date = mysqli_escape_string($connection,$_POST['return_date']);
    	$last_date = mysqli_escape_string($connection,$_POST['last_date']);
    	$hotel_makkah = mysqli_escape_string($connection,$_POST['hotel_makkah']);
    	$hotel_makkah_dist = mysqli_escape_string($connection,$_POST['dist_makkah']);
    	$hotel_madina = mysqli_escape_string($connection,$_POST['hotel_madina']);
    	$hotel_madina_dist = mysqli_escape_string($connection,$_POST['dist_makkah']);
        $package_price = mysqli_escape_string($connection,$_POST['package_price']);
        $include_taxes = implode(',', $_POST['inclusive_taxes']);
    	//$miscellaneous = mysqli_escape_string($connection,$_POST['miscellaneous']);
   		$miscellaneous_checkBox = implode(',', $_POST['miscellaneous']);
        $luggage = mysqli_escape_string($connection,$_POST['luggage']);
        $routes = mysqli_escape_string($connection,$_POST['routes']);
        $transportation = mysqli_escape_string($connection,$_POST['transportation']);
    	$bf_checkBox = implode(',', $_POST['breakfast']);
    	$l_checkBox = implode(',', $_POST['lunch']);
    	$dinner_checkBox = implode(',', $_POST['dinner']);

    	$img_hotel =$_FILES["hotel_pics"]["name"];
    	$img_food = $_FILES["food_pics"]["name"];

    	
    	 $query = "INSERT INTO package_details(id,organizer_id,package_name,source,destination,no_of_days,category,total_seats,available_seats,travel_date,return_date,last_date,hotel_makkah,hotel_makkah_dist,hotel_madina,hotel_madina_dist,package_price,include_taxes,miscellaneous,luggage,routes,transportation,breakfast,lunch,dinner,hotel_pics,food_pics) VALUES (NULL,'$package_owner' ,'$packagename','$source','$destination','$no_of_days','$category',$total_seats,$available_seats,'$travel_date','$return_date','$last_date','$hotel_makkah','$hotel_makkah_dist','$hotel_madina','$hotel_madina_dist','$package_price','".$include_taxes."','".$miscellaneous_checkBox."','$luggage','$routes','$transportation','".$bf_checkBox."','".$l_checkBox."','".$dinner_checkBox."','$img_hotel','$img_food')";
   	 	 $insert_package = mysqli_query($connection,$query);

   	 	           comfirmquery($insert_package);
        echo "<script>alert(' Now Fill Airlines Form')</script>";

        echo "<script>window.open('../includes/airlines.php','_self')</script>";
    		
    


if($_FILES["hotel_pics"]["name"] != '')
{
     $uploaded_file = $_FILES['hotel_pics']['name'];
        /*$uploaded_file_temp = $_FILES['hotel_phs']['tmp_name'];
        move_uploaded_file( $uploaded_file_temp , "../uploaded phs/$uploaded_file" );*/
           $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

    if(($_FILES['hotel_pics']['size'] >= $maxsize) || ($_FILES["hotel_pics"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['hotel_pics']['type'], $acceptable)) && (!empty($_FILES["hotel_pics"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['hotel_pics']['tmp_name'], "../hotel pics/$uploaded_file");
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); 
    }
}


if($_FILES["food_pics"]["name"] != '')
{
     $uploaded_file = $_FILES['food_pics']['name'];
        /*$uploaded_file_temp = $_FILES['pic_phs']['tmp_name'];
        move_uploaded_file( $uploaded_file_temp , "../uploaded phs/$uploaded_file" );*/
           $errors     = array();
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

    if(($_FILES['food_pics']['size'] >= $maxsize) || ($_FILES["food_pics"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['food_pics']['type'], $acceptable)) && (!empty($_FILES["food_pics"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['food_pics']['tmp_name'], "../food pics/$uploaded_file");
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); 
    }
}





}
?>