<!DOCTYPE html>
<html>
<head>
	<title>Admin portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--link to css page-->
<link rel="stylesheet" href="../css/add_package.css" class="css">

<!--bootStrap cdn link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>

                     <!-- navbar heading -->
                 <nav class="navbar navbar-expand-lg navbar-light bg-info">
                   <h3 class="">Add Package</h3>
                 </nav>

                 <!-- The warning marquee -->
                 <marquee behavior="#" direction="#" class="bg-info"><strong>Please enter the details correctly.</strong></marquee>

                 <!-- form starts -->

              <div class="container col-sm-5">
               <form class="needs-validation" action="../Process/add_package_db.php" method="post" enctype="multipart/form-data" novalidate>

                       <!-- the first row of the form -->
                 <div class="form-group">

        <label for="packageName">Package Name:</label>
    <input type="text" name="packageName" id="packageBox" class="form-control" placeholder="Eg: January Delux Umrah" required>
                      <div class="valid-feedback">
                    Looks good!
                      </div>

                      <div class="invalid-feedback">
                     Please provide a Package name.
                     </div>
                </div>
                                
                                  <!-- the Second row of the form -->

              <div class="row" class="form-group" id="secondRow">
                     <div class="col">
                     <label for="source">Source:</label>
                        <div class="input-group mb-3">
                           <select name="source" class="custom-select" id="inputGroupSelect01" required>
                             <option value="" disabled selected>Choose source..</option>
                             <option value="Delhi">Delhi</option>
                             <option value="Mumbai">Mumbai</option>
                             <option value="Banglore">Banglore</option>
                           </select>
                           <div class="valid-feedback">
                            Looks good!
                           </div>

                             <div class="invalid-feedback">
                            Please choose a source.
                             </div>
                          </div>
                            </div>
                    <div class="col">
                     <label for="">Destination:</label>
    <input value="Jeddah" type="text" name="destination" id="Destination"  class="form-control" required>
                          <div class="valid-feedback">
                    Looks good!
                      </div>

                      <div class="invalid-feedback">
                     Please provide a destination.
                     </div>
                   </div>
                 </div>
                
                                     <!-- the third row of the form -->

                <div class="row" class="form-group" id="thirdRow">
                     <div class="col">
                     <label for="days">No of days:</label>
    <input type="text" name="days" id="days"  class="form-control" placeholder="Eg: 14 Days" required>
                               <div class="valid-feedback">
                    Looks good!
                      </div>

                      <div class="invalid-feedback">
                     Please provide total number of days.
                     </div>
                   </div>
                    <div class="col">
                     <label for="source">Package category:</label>
                        <div class="input-group mb-3">
                           <select name="category" class="custom-select" id="inputGroupSelect02" required>
                             <option value="" disabled selected>Choose Categories..</option>
                             <option value="Economic">Economic</option>
                             <option value="Budget">Budget</option>
                             <option value="Delux">Delux</option>
                           </select>
                           <div class="valid-feedback">
                    Looks good!
                      </div>

                      <div class="invalid-feedback">
                     Please choose Package category.
                     </div>
                          </div>
                            </div>
                    
                </div>
 
                                            <!-- the fourth row of the form -->

                               <div class="row" class="form-group" id="thirdRow">
                                  <div class="col">
                                       <label for="">Total seats:</label>
                                       <input type="text" name="total_seats" id="days"  class="form-control" placeholder="Eg: 50"required>
                                       <div class="valid-feedback">
                                      Looks good!
                                        </div>

                                     <div class="invalid-feedback">
                                    Please provide total no of Seats.
                                        </div>
                                 </div>
                                  <div class="col">
                                         <label for="">Available seats:</label>
                                          <input type="text" name="available_seats" id="travelMode"  class="form-control"  placeholder="Eg: 45" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>

                                     <div class="invalid-feedback">
                                    Please provide Available Seats.
                                        </div>
                                      </div>
                                 </div>

                                 <!-- the fivth row of the form -->

                               <div class="row form-group" id="row8">
                                <div class="col-sm-4">
                                  <label for="#"> Date of travel:</label>
                                  <input type="date" name="travel_date" max="3000-12-31" min="1000-01-01" class="form-control" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Date of travel.
                                   </div>
                          
                                </div>
                               

                                <div class="col-sm-4">
                                  <label for="#">Return date:</label>
                                  <input type="date" name="return_date" max="3000-12-31" min="1000-01-01" class="form-control" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Return Date.
                                   </div>
                                </div>

                                <div class="col-sm-4">
                                  <label for="#">Last date of booking:</label>
                                  <input type="date" name="last_date" max="3000-12-31" min="1000-01-01" class="form-control" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Date of Booking.
                                   </div>
                                </div>
                               </div>

                               <!-- the Sixth row of the form -->

                               <div class="row" class="form-group">
                                <div class="col">
                                  <label for="#" style="margin-top: 25px;">Makkah hotel name:</label>
                                  <input type="text" name="hotel_makkah" id="source"  class="form-control"  placeholder="Eg: Hotel palestine" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                      </div>

                                     <div class="invalid-feedback">
                                    Please provide Makkah's hotel name.
                                     </div>
                                     </div>
                                
                                 

                                      <div class="col">
                                         <label for="#" style="margin-top: 25px;">Distance:</label>
                                  <input  type="text" name="dist_makkah" id="source"  class="form-control" placeholder="In Kilometers" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Distance.
                                   </div>
                                </div>
                               </div>

                               <!-- the seventh row of the form -->

                               <div class="row" class="form-group">
                                <div class="col">
                                  <label for="#" style="margin-top: 25px;">Madina hotel name:</label>
                                  <input type="text" name="hotel_madina" id="source"  class="form-control"  placeholder="Eg: Hotel Manzil Madina" required>
                                  <div class="valid-feedback">
                                  Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Madina's hotel name.
                                   </div>
                                    </div>

                                      <div class="col">
                                         <label for="#" style="margin-top: 25px;">Distance:</label>
                                  <input type="text" name="dist_makkah" id="source"  class="form-control" placeholder="In Kilometers" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Distance.
                                   </div>
                                </div>
                               </div>

                               <!-- the Eigth row of the form -->

                               <div class="row" class="form-group">
                                <div class="col">
                                  <label for="#" style="margin-top: 25px;">Package price:</label>
                                  <input type="text" name="package_price" id="source"  class="form-control"  placeholder="Eg: 60,000" required>
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Package Price.
                                   </div>
                                  <input type="checkbox" name="inclusive_taxes[]" value="include all taxes" class="form-check-input" style="margin-left: 5px;">
                                   <text class="text-info" style="margin-left: 20px;" >Inclusive all taxes</text>
                                    </div>
                                          
                                       
                                        <!--  miscellaneous modal part -->

                                      <div class="col">
                                        
                 <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      
        <label for="" style="margin-top: 25px"; >Select miscellaneous:</label>
        <button type="button" class="btn btn-info" data-toggle="collapse" href="#collapse1"><span>Hotel Features</span></button>
     
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        <div class="card-body">
        </div>
       <tr>
                                  <td>
                                     <div class="col">
                                      <input type="checkbox" name="miscellaneous[]" value="Laundary" class="form-check-input" id="breakfast">
                                      <text>Laundary</text>
                                     </div> 
                                  </td>
                                  <td>
                                    <div class="col">
                                      <input type="checkbox" name="miscellaneous[]" value="Zam_zaam" class="form-check-input" id="breakfast">
                                       <text>Zam-Zaam</text>
                                      </div> 
                                  </td>
                                  <td>
                                    <div class="col">
                                    <input type="checkbox" name="miscellaneous[]" value="Wifi" class="form-check-input" id="breakfast">
                                     <text>Wifi</text>
                                    </div> 
                                  </td>

                                </tr>
      </ul>
    </div>
  </div>
</div> 
  </div>
</div>
                                         <!--  miscellaneous modal part ends with the above div -->
                                   <!-- the ninth row starts -->

                                   <div class="row" class="form-group">
                                <div class="col">
                                  <label for="#" style="margin-top: 15px;">Luggage details:</label>
                                  <input type="text" name="luggage" id="source"  class="form-control"  placeholder="Eg: 21 kilograms" required="">
                                  <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please provide Luggage details.
                                   </div>
                                    </div>

                                      <div class="col">
                                         <label for="Flights"  style="margin-top: 15px;">Flight routes:</label>
                                               <div class="input-group mb-3">
                                                <select name="routes" class="custom-select" id="inputGroupSelect04" required>
                                                  <option value="" disabled selected>Choose Routes..</option>
                                              <option value="Via">Via</option>
                                             <option value="Direct">Direct</option>
                                           
                                         </select>
                                         <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please choose routes.
                                   </div>
                                       </div>
                                </div>
                               </div>
                                        
                                      <!-- the tenth row starts -->

                                 <div class="row" class="form-group">
                                    <div class="col">
                                         <label for="Flights"  style="margin-top: 25px;">Transportation:
                                         </label>
                                               <div class="input-group mb-3">
                                                <select name="transportation" class="custom-select" id="inputGroupSelect01" required>
                                                  <option value="" disabled selected>Choose modes..</option>
                                              <option value="Bus">Bus</option>
                                             <option value="Cab">Cab</option>
                                           
                                         </select>
                                         <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please choose modes of transportation.
                                   </div>
                                       </div>
                                </div>
                                </div>

                                     
                               
                                               
                                                <!-- food package accordian starts here -->

                <label for=""  class="form-check-label" id="foodPackage" style="margin-top: 25px;">Food Package:</label>

                                          <div class="accordion" id="accordionExample">
                                        <div class="card">
                                     <div class="card-header" id="headingOne">
                                      <h2 class="mb-0">

                                        <!-- Accordian breakfast button & part -->
       <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <span id="text">Breakfast</span>
                    </button>
               </h2>
           </div>
      <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

              <table class="table">
                  <tbody>
           <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="breakfast[]" value="Kheema_Gurda" class="form-check-input" id="breakfast">
       <text>Kheema Gurda</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="breakfast[]" value="Bread_roti" class="form-check-input">
       <text>Bread roti</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="breakfast[]" value="Omlet" class="form-check-input">
       <text>Omlet</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="breakfast[]" value="Butter" class="form-check-input" id="breakfast">
       <text>Butter</text><img src="butter.jpg" alt="" class="dishesImage">
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="breakfast[]" value="Jam" class="form-check-input">
       <text>Jam</text><img src="jam.png" alt="" class="dishesImage">
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="breakfast[]" value="Cream" class="form-check-input">
       <text>Cream</text><img src="kream.jpg" alt="" class="dishesImage">
        </div>
              </td>
            </tr>
             </div>

             <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="breakfast[]" value="Honey" class="form-check-input" id="breakfast">
       <text>Honey</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="breakfast[]" value="Cornflakes" class="form-check-input">
       <text>Cornflakes</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="breakfast[]" value="Zaitoon" class="form-check-input">
       <text>Zaitoon</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="breakfast[]" value="tea" class="form-check-input" id="breakfast">
       <text>tea</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="breakfast[]" value="Coffee" class="form-check-input">
       <text>Coffee</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="breakfast[]" value="Water" class="form-check-input">
       <text>Water</text>
        </div>
              </td>
            </tr>
             </div>
         </tbody>
               </table>

               <!-- breakfast save and Add buttons -->
               <!-- <button type="button" class="btn btn-success  col-sm-3"  id="#" style=" float: right; margin-bottom: 30px;">Save</button>
                <button type="button" class="btn btn-danger col-sm-3"  id="#" style=" margin-bottom: 30px;">Add</button> -->
      </div>
    </div>
  </div>

      <!-- accordian Lunch button & part -->
  <div class="card" >
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-info collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <span id="text">Lunch</span>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        

               <table class="table">
                   <tbody>
           <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="lunch[]" value="Kheema_Gurda" class="form-check-input" id="breakfast">
       <text>Kheema Gurda</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="lunch[]" value="Bread_roti" class="form-check-input">
       <text>Bread roti</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="lunch[]" value="Omlet"  class="form-check-input">
       <text>Omlet</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="lunch[]" value="Butter"  class="form-check-input" id="breakfast">
       <text>Butter</text><img src="butter.jpg" alt="" class="dishesImage">
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox"  name="lunch[]" value="Jam"  class="form-check-input">
       <text>Jam</text><img src="jam.png" alt="" class="dishesImage">
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox"  name="lunch[]" value="Cream"  class="form-check-input">
       <text>Cream</text><img src="kream.jpg" alt="" class="dishesImage">
        </div>
              </td>
            </tr>
             </div>

             <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox"  name="lunch[]" value="Honey"  class="form-check-input" id="breakfast">
       <text>Honey</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox"  name="lunch[]" value="Cornflakes"  class="form-check-input">
       <text>Cornflakes</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox"  name="lunch[]" value="Zaitoon"  class="form-check-input">
       <text>Zaitoon</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="lunch[]" value="tea"  class="form-check-input" id="breakfast">
       <text>tea</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox"  name="lunch[]" value="Coffee"  class="form-check-input">
       <text>Coffee</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox"  name="lunch[]" value="Water"  class="form-check-input">
       <text>Water</text>
        </div>
              </td>
            </tr>
             </div>
         </tbody>
               </table>

               <!-- lunch save & Add button -->
              <!--   <button type="button" class="btn btn-success col-sm-3"  id="#" style= "float: right; margin-bottom: 30px;">Save</button>
                 <button type="button" class="btn btn-danger col-sm-3"  id="#" style=" margin-bottom: 30px;">Add</button> -->
      </div>
    </div>
  </div>

  <!-- accordian dinner button & part -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-info collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <span id="text">Dinner</span>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          

               <table class="table">
                  <tbody>
           <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="dinner[]" value="Kheema_Gurda" class="form-check-input" id="breakfast">
       <text>Kheema Gurda</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="dinner[]" value="Bread_roti" class="form-check-input">
       <text>Bread roti</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="dinner[]" value="Omlet" class="form-check-input">
       <text>Omlet</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="dinner[]" value="Butter" class="form-check-input" id="breakfast">
       <text>Butter</text><img src="butter.jpg" alt="" class="dishesImage">
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="dinner[]" value="Jam" class="form-check-input">
       <text>Jam</text><img src="jam.png" alt="" class="dishesImage">
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="dinner[]" value="Cream" class="form-check-input">
       <text>Cream</text><img src="kream.jpg" alt="" class="dishesImage">
        </div>
              </td>
            </tr>
             </div>

             <div class="row" >
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="dinner[]" value="Honey" class="form-check-input" id="breakfast">
       <text>Honey</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="dinner[]" value="Cornflakes" class="form-check-input">
       <text>Cornflakes</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="dinner[]" value="Zaitoon" class="form-check-input">
       <text>Zaitoon</text>
        </div>
              </td>
            </tr>
             </div>

             <div class="row">
            <tr>
              <td>
                 <div class="col">
            <input type="checkbox" name="dinner[]" value="tea" class="form-check-input" id="breakfast">
       <text>tea</text>
        </div> 
              </td>

              <td>
               <div class="col">
           <input type="checkbox" name="dinner[]" value="Coffee" class="form-check-input">
       <text>Coffee</text>
        </div>
              </td>

              <td>
                   <div class="col">
          <input type="checkbox" name="dinner[]" value="Water" class="form-check-input">
       <text>Water</text>
        </div>
              </td>
            </tr>
             </div>
         </tbody>
               </table>

               <!-- dinner Save & Add buttons -->
               <button type="button" class="btn btn-success col-sm-3"  id="#" style=" float: right; margin-bottom: 30px;">Save</button>
               <button type="button" class="btn btn-danger col-sm-3"  id="#" style=" margin-bottom: 30px;">Add</button>
      </div>
    </div>
  </div>
</div>

                                  <!-- the twelveth row upload images part -->
                               <div class="row">
                                 <div class="col">
                                   <div class="custom-file" style="margin-top: 25px;">
                                    <input type="file" class="custom-file-input" name="hotel_pics" accept="image/*" id="" lang="pl-Pl" required>
                                    <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please upload Hotel images.
                                   </div>
                                    <label class="custom-file-label" for="customFileLang">Hotel images</label>
                                 </div>
                                </div>

                                <div class="col" style="margin-top: 25px;">
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="food_pics" accept="image/*" id="customFileLang" lang="pl-Pl" required>
                                    <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please Upload Food images.
                                   </div>
                                    <label class="custom-file-label" for="customFileLang">Food images</label>
                                 </div>
                                </div>
                              </div>

                              <!-- the thirteenth row Select airline part -->

                             
                            <div class="col-sm-5"  style="margin-top: 25px; float: right;">
                                  <button type="submit" name="submit"  class="btn btn-success">Submit</button>
                                </div>   
                                <br>
                                <br>
                                <br>  <br><br>
  
            
                                     <button   class="btn btn-danger form-control" onclick="window.location.href = 'listing.php';" >List of Packages</button>
    
                 </form>

                 
                
                 
                       
                               
                           


                                
                  


	


 <!-- Optional JavaScript -->
 <script src="https://kit.fontawesome.com/4c8b8657b3.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
           $("#other_airlines").click(function() {
              alert("Fill This Form Again with different airline");
           });

       });


      (function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
                 
    </script>
</body>
</html>