 <html>
 <head>
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
                   <h3 class="">Airlines</h3>
                 </nav>

                 <!-- The warning marquee -->
                 <marquee behavior="#" direction="#" class="bg-info"><strong>Please enter the details correctly.</strong></marquee>

  <form method="post" action="../Process/airlines_db.php">
                 
 <div class="container col-md-4">
                             <label for="" style="margin-top: 25px"; >Select Airline details:</label>
                             <label for="source">Airlines:</label>
                        <div class="input-group mb-3">
                           <select class="custom-select" name="airline_name" id="inputGroupSelect03" id="field" required>
                             <option value="" disabled selected>Choose Airlines..</option>
                             <option value="Saudia (SVA)">Saudia (SVA) </option>
                             <option value="Indigo (NSE)">Indigo (NSE) </option>
                             <option value="Saudigulf (6s)">Saudigulf (6s)</option>
                           </select>
                           <div class="valid-feedback">
                                Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please Choose airlines.
                                   </div>
                          </div>

                          <h5 style="text-align: center;">Fill details as per Airlines.</h5>
                                <tr>
                                  <td>
                                     <div class="col">
                                      <i class="fas fa-user-friends"></i>
                                       <text style="margin-left: 5px;">Duo:</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="duo_price" class="form-control" placeholder="Enter price" id="field" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                     </div> 
                                     <hr>
                                  </td>
                                  <td>
                                    <div class="col">
                                      <i class="fas fa-users"></i>
                                      <text style="margin-left: 5px;">Trio:</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="trio_price" class="form-control" placeholder="Enter price" id="field" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      </div><hr> 
                                  </td>
                                  <td>
                                    <div class="col">
                                      <i class="fas fa-users"></i>
                                       <text style="margin-left: 5px;">Quad:</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="quad_price" class="form-control" placeholder="Enter price" id="field" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      <div class="valid-feedback">
                                       Looks good!
                                     </div>
                                      </div><hr> 
                                  </td>
                                  <td>
                                    <div class="col">
                                      <i class="fas fa-users"></i>
                                       <text style="margin-left: 5px;">Quint:</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="quint_price" class="form-control" placeholder="Enter price" id="field" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      <div class="valid-feedback">
                                       Looks good!
                                     </div>
                                      </div><hr> 
                                  </td>
                                 
                                  </tr>

                                  <h5 style="text-align: center;">Children section</h5>
                                  <tr>
                                    <td>
                                        <div class="col">
                                      <i class="fas fa-baby"></i>
                                      <text style="margin-left: 5px;">0-2 (years):</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="o_2year_child" class="form-control" placeholder="Enter price" id="field" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                      </div><hr> 
                                    </td>
                                    <td>
                                      <div class="col">
                                         <i class="fas fa-child"></i>
                                       <text style="margin-left: 5px;">2-6 (years):</text>
                                           <div class="input-group mb-3">
                                         <input type="text" name="2_6year_child" id="field" class="form-control" placeholder="Enter price" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      <div class="valid-feedback">
                                       Looks good!
                                     </div><hr>
                                      </div>
                                    </td>
                                    <td>
                                        <div class="col">
                                         <i class="fas fa-child"></i>
                                       <text style="margin-left: 5px;">6-12 (years):</text>
                                           <div class="input-group mb-3">
                                         <input type="text" id="field" name="6_12year_child" class="form-control" placeholder="Enter price" required>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please enter price.
                                   </div>
                                         <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                             </div>
                                           </div>
                                      <div class="valid-feedback">
                                       Looks good!
                                     </div><hr>
                                      </div>
                                    </td>
                                  </tr>
                           
                           <h5 style="text-align: center;">Return Tickets</h5>
                           <tr>
                            <div class="col">
                              <td>
                                         <label for="Flights"  style="margin-top: 25px;">Return tickets:</label>
                                               <div class="input-group mb-3">
                                                <select class="custom-select" name="return_ticket" id="inputGroupSelect05" required>
                                                  <option value="" disabled selected>Return tickets..</option>
                                              <option value="1">Available</option>
                                             <option value="2">Not available</option>
                                           
                                         </select>
                                         <div class="valid-feedback">
                                       Looks good!
                                     </div>

                                  <div class="invalid-feedback">
                                   Please select.
                                   </div>
                                       </div>
                                </div>
                                </div>
                              </td>
                              </tr>

                           <!-- the (choose other airlines, save changes, close) part-->
                             <div class="modal-footer">
                              
                                <button type="reset" id="other_airlines" class="btn btn-warning">Choose other Airlines</button>
                               <button type="submit" name="submit_airlines" class="btn btn-success">Save changes</button>
                              
                            
                      <button   class="btn btn-danger" onclick="window.location.href = 'add_package.php';" >Add another Package</button>       
                                <button   class="btn btn-danger" onclick="window.location.href = 'listing.php';" >All Packages</button> 
                              </div>
                              
                          </div>
                      </div>
                  </div>
                   </div>
                      </div>
                          </div>
                         
                                           
              </div>
            </tr>
             </form>

          </div>

       




	


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