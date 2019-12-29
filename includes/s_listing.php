<!DOCTYPE html>
<html>

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

    <link rel="stylesheet" href="../css/frame.css">
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
                <form>
                     <div class="form-group">
                      <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" id="Check1">
                       <label class="form-check-label" for="exampleCheck1">Economy</label>
                        </div>
                         <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" id="Check2">
                       <label class="form-check-label" for="exampleCheck1">Delux</label>
                        </div>
                         <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" id="Check3">
                       <label class="form-check-label" for="exampleCheck1">Super Delux</label>
                        </div>
                     </div>
                     <button type="submit" name="filter" class="btn btn-success" >Filter</button>
                   </form><hr>
                    </div>
               </div>

               <div class="sort" style="margin-left: 260px; ">
                 <div class="row">
                   <div class="col-sm-5">
                     <h5>Results</h5>
                   </div>
                   <!--sort-->
                     
                     <div class="col-sm-4">
                     <div class="">
                    <p>Sort by:</p>
                  </div>
                  <div class="">
                     <select class="form-control">
                   <option>Low-High</option>
                   <option>High-Low</option>
                         </select>
                  </div>
                    </div>
                   </div>
            
                   
                 </div><hr>

               
  <div class="container" style="margin-right: 10px ">
       <div class="row">
  <div class="col-sm-4">
          
     <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../hotel pics/img1.jpeg" alt="" style="width: 420px; height: 255px;">
      <div class="carousel-caption">
       
      </div>   
    </div>
    
  </div>

    
  </div> 
     <div class="card-body">
    <div class="col-md-12">
     
        <h5>Budget package</h5><small class="text-warning">(15 days)</small>
        <small><p class="card-text"><strong>Makkah hotel - </strong>Hotel Pullman Zamzam.  <i class="fas fa-map-marker-alt text-danger"></i>700 mtrs</p></small>
        <small><p class="card-text"><strong>Madina hotel - </strong>Hotel Dallah Taibah.  <i class="fas fa-map-marker-alt text-danger"></i>1 Km</p></small>
        <br>
        <kbd class="bg-success">4.1 <i class="fas fa-star"></i></kbd> <small>(111 Ratings). Very Good.</small><br>
        <small><i class="fas fa-car"></i> parking, Laundary, Hot water.</small><br>
        <small><strong>Flight Direct </strong> <i class="fas fa-plane-departure"></i> Mumbai - <i class="fas fa-plane-arrival"></i>Jeddah.</small>

        
      </div>
    </div>
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