<!DOCTYPE html>
<html>
<?php
ob_start();
session_start();
 include"../includes/db_conn.php";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>listing page</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.2/nouislider.css">

    <link rel="stylesheet" href="../css/listing.css">
</head>

            <body>

                 
                 <div class="sidenav bg-light" style="width: 220px;">
                     <div class="filter__heading">
                      <span><h2>Filters</h2></span>
                </div>
                <div class="row">
                  <a href="" tabindex="0" role="button" class="sidebar__clearAll">
                     <span>Clear all</span>
                   </a>
                </div>
                <div class="slidecontainer" style="margin-left: 10px;">
                  <label for="#" style="margin-top: 10px;">Select Price:</label>
               <input type="range" min="500" max="4000" value="1000" class="slider" id="myRange">
               <p style="margin-top: 5px;">price: <span id="money"></span></p>
                 </div>
                <hr>

               <div class="slidecontainer" style="margin-left: 10px;">
                  <label for="#" style="margin-top: 10px;">Distance:</label>
               <input type="range" min="0" max="20" value="5" class="slider" id="myDistance">
               <p  style="margin-top: 5px;">Kilometers: <span id="K/m"></span></p>
                 </div>
                <hr>
                <div style="margin-left: 10px;">
                <label for="#"><h4>Categories</h4></label>
                <label for="#">Packages:</label><br>
                <form class="form-control" action="listing.php" method="post">
                	<?php
                		 $query = "SELECT DISTINCT category from package_details ORDER BY category ";
                    $selectquery = mysqli_query( $connection , $query );
                    while( $row = mysqli_fetch_assoc( $selectquery ) )
        {
                	?>
                	<label class="form-check-label" for="exampleCheck1" id="text_change" style="display: none;">All Packages</label>
                     <div class="form-group" id="category1">
                      <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" name="category_checkbox[]" value="<?php echo ($row['category']);  ?>"  id="category_checkbox">
                       <label class="form-check-label" for="exampleCheck1"><?php echo ($row['category']);  ?></label>

                        </div>
                       
                     </div>
                <?php } ?>
                   <hr>
                    <button type="submit" name="filter" class="btn btn-success" >Filter</button>
                </form>
                    </div>
               </div>



               <div class="sort" style="margin-left: 260px; ">
                 <div class="row">
                   <div class="col-sm-5">
                    <br>

                     <h5>All Packages</h5>
                   </div>
                   <!--sort-->
                     
                     <div class="col-sm-4">
                     <div class="">
                    <p>Sort by:</p>
                  </div>
                  <div class="">
                     <select onChange="window.location.href=this.value" class="form-control">
                      <option value="">Latest</option>
                   <option value="low_high.php">Low-High</option>
                   <option value="high_low.php">High-Low</option>

                         </select>
          
                  </div>
                    </div>
                    <kbd class="align-self-center bg-info" style="margin-left: 60px">
                     
                     
                      <?php
                      echo "Welcome";
                      echo '&nbsp';
                      if(isset($_SESSION['agent_name_session']))
                      {
                       echo $_SESSION['agent_name_session'];  
                      }
                      
                      
                      
                      
                      ?>
                    </kbd>
                   </div>
            
                   
                 </div><hr>
<!-- 
                 <div class="card mb-7" style="max-width: 50%; margin-left: 320px; border-style: none; margin-top: 50px;">
  <div class="row no-gutters">
    <div class="col-md-6" style="margin-top: 20px;">

  

     
    </div>
    
  

</div>
    </div> -->

  
  <div class="container" style="margin-right: 10px ">
  	   <div class="row">
  <div class="col-sm-4">
  	  		<a href="september_package.php">
            <img src="../hotel pics/hotel12.webp" alt="" style="width: 380px; height: 255px;">
          </a> 
           <br>
           <a href="marchPackage.php">
             <img src="../hotel pics/img1.jpeg" alt="" style="width: 380px; height: 255px;">
           </a> 
            
            <br>
            <a href="febPackage.php">
             <img src="../hotel pics/pexels-photo-271639.jpeg" alt="" style="width: 380px; height: 255px;">
              
            </a>
           <br>
<a href="JanuaryPackage.php">
        <img src="../hotel pics/cap.jpg" alt="" style="width: 380px; height: 255px;">
           
</a>
   <br>
          <a href="decPackage.php">

            <img src="../hotel pics/hotel.jpg" alt="" style="width: 380px; height: 255px;">

          </a>   
<br>
          <a href="novPackage.php">

            <img src="../hotel pics/hotel.jpg" alt="" style="width: 380px; height: 255px;">

          </a>  


  <!--    <?php
  
                      $query = "SELECT * FROM package_details ORDER BY id DESC";
                      $hotel_fetched_res = mysqli_query( $connection , $query );
                      while($data_fetched_posts = mysqli_fetch_assoc($hotel_fetched_res))
                      {
                           $hotel_image = $data_fetched_posts['hotel_pics'];
                          echo "'<tr style ='table-border = 12px'>";
                          echo"<td><a href='#'><img src='../hotel pics/{$hotel_image}' alt='Los Angeles' width='380px' height='255px'/></a></td>";
                          echo '</tr>';
      
                      }
  
                          ?> -->
  	
  </div> 
  <div class="col">
  	<?php

$query = "SELECT * FROM package_details ORDER BY id DESC";
 
  if( !( $selectRes = mysqli_query($connection,$query) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  { 
  	?>
       <div class="col-md-12">
      <div class="card-body">
        <?php
      if( mysqli_num_rows( $selectRes )==0 )
      {
        echo "No Rows Returned";
      }
      else
      {
        while( $row = mysqli_fetch_assoc( $selectRes ) )
        {
          ?>
        <h5><a class="text-info"><?php echo "<td>{$row['package_name']}</td> "; ?></a></h5><small class="text-warning"><?php echo "<td>{$row['no_of_days']}</td>"; ?></small>
        <small><p class="card-text"><strong>Makkah hotel - </strong><?php echo "<td>{$row['hotel_makkah']}</td>"; ?> <i class="fas fa-map-marker-alt text-danger"></i><?php echo "<td>{$row['hotel_makkah_dist']}</td>"; ?> </p></small>
        <small><p class="card-text"><strong>Madina hotel - </strong><?php echo "<td>{$row['hotel_madina']}</td>"; ?>  <i class="fas fa-map-marker-alt text-danger"></i><?php echo "<td>{$row['hotel_madina_dist']}</td>"; ?>  </p></small>
        <br>
        
        <kbd class="bg-success">4.1<i class="fas fa-star"></i></kbd> <small>(111 Ratings). Very Good.</small><br>
        <small><strong>Flight <?php echo "<td>{$row['routes']}</td>"; ?> </strong> <i class="fas fa-plane-departure"></i> <?php echo "<td>{$row['source']}</td>"; ?> - <i class="fas fa-plane-arrival"></i>Jeddah.</small> <br>
        <small><i class="fas fa-hotel"></i><?php echo "<td>{$row['miscellaneous']}</td>"; ?></small>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <i class="fas fa-rupee-sign"></i><strong  style="color:Red"><?php echo "<td>{$row['package_price']}</td>"; ?></strong>
   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Book Now</button>
<hr>
 <?php    

echo '<br>';echo '<br>';} }

}
      ?>

  </div>
  </div>





    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
     <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("money");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var slider1 = document.getElementById("myDistance");
var output1 = document.getElementById("K/m");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}


</script>

</body>

</html>