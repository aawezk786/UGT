<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/loginreg.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
    <img src="umrago pics/avatar.png" class="avatar">
 <!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
                      <!--LOGIN -->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
        <h1>Login Here</h1>
        <form class="form-signin" method="post" action="Process/login.php">
            <label for="inputEmail" class="sr-only">Email address/Phone No</label>
            <input type="text" id="Email" placeholder="Email Address/Phone No" name="email_phone" required autofocus>
<!---------------------------------------------------------------------------------->
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="Password2" placeholder="Password" name="password" required autofocus>
            <div class="">
            <label for="dropdown" class="sr-only">Select Role</label>
             <select name="role" class="form-control" >
  <option value="Agent">Agent</option>
  <option value="Organizer">Organizer</option>
 </select> 
</div>
            <a href="#">forgotten password?</a><br>
<!---------------------------------------------------------------------------------->
            <div class="row">
              <div class="col">
            <button type="submit" name="login" class="btn btn-success btn-lg btn-block">Login</button>
            <i>Don't have an account ?Create one</i>
            <button type="button" class="btn btn-primary btn-lg btn-block"id="agenttoggle">Register as Agent</button>
            <button type="button" class="btn btn-primary btn-lg btn-block"id="orgtoggle">Register as Organizer</button>
              </div>
 
            </div>
<!---------------------------------------------------------------------------------->
          </form>
        </div>
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
                      <!--AGENT REGISTRATION-->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
<div id="reg_agentdiv">
      <fieldset>
    <div class="loginbox">
      <img src="umrago pics/avatar.png" class="avatar">
      <h4>Register as Agent</h4>
      <form class="form-signin" method="post" action="Process/loginreg_db.php">
       <label for="full name" class="sr-only ">Full Name</label>
       <input type="text" id="full_name" placeholder="Full Name" name="full_name" required autofocus>
<!---------------------------------------------------------------------------------->
       <label for="number" class="sr-only">Contact</label>
       <input type="text" id="number" placeholder="Contact No." name="contact" required autofocus>
<!---------------------------------------------------------------------------------->
       <label for="email" class="sr-only">Email address</label>
       <input type="email" id="Email" placeholder="Email address" name="email" required autofocus >
<!---------------------------------------------------------------------------------->
       <label for="inputpassword" class="sr-only">password</label>
       <input type="password" id="Password" placeholder="password" name="password"required autofocus>


      
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="send_otp"  id="aaa">Register </button>

       <button type="button"class="btn btn-primary btn-lg btn-block" id="orgtogglescnd">Register as Organizer</button>
       <i>have an account ? go back to login</i>
       <button type="button"class="btn btn-primary btn-lg btn-block" id="logintoggle">LogIn</button>
<!---------------------------------------------------------------------------------->


      
       </div>
       
       </div>
 </form>
 </fieldset>
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->
                      <!--Organization REGISTRATION-->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->


<div class="loginbox2" id="reg_orgdiv">
  <fieldset>
        <img src="umrago pics/avatar.png" class="avatar">

        <form class="form-signin" method="post" action="Process/send_otp.php">
        <h4>Register as Organizer</h4>
        <label for="firstname" class="sr-only ">Full Name</label>
        <input type="text" id="full_name"placeholder="Full Name" name="full_name" required autofocus>
        <!---------------------------------------------------------------------------------->
        <label for="inputnumber" class="sr-only">Contact</label>
        <input type="text" id="number" placeholder="Contact No." name="contact" required autofocus>
        <!---------------------------------------------------------------------------------->
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="Email" placeholder="Email address" name="email" required autofocus>
        <!---------------------------------------------------------------------------------->
        <label for="company_name" class="sr-only ">Company Name</label>
        <input type="text" id="company_name" placeholder="Company Name" name="company_name" required autofocus>
        <!---------------------------------------------------------------------------------->
        <label for="inputpassword" class="sr-only">password</label>
        <input type="password" id="Password1" placeholder="password" name="password" required autofocus>
        <!---------------------------------------------------------------------------------->
         <button type="submit" class="btn btn-primary btn-lg btn-block" name="send_otp"  id="bbb">Register </button>
        <button type="button"class="btn btn-primary btn-lg btn-block" id="agenttogglescnd">Register as Agent</button>
         <i>have an account ? go back to login</i>
        <button type="button"class="btn btn-primary btn-lg btn-block" id="logintogglescnd">LogIn</button>
        <!---------------------------------------------------------------------------------->
       
      </div>
      
  
   </form>
        </fieldset>


  <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <script type="">
         $(document).ready(function() 
    {
            $("#reg_agentdiv").hide();
            $("#reg_orgdiv").hide(); 
            $("#logintoggle").hide();


            //Agent button clicked //
         $("#agenttoggle").click(function() 
            {
              $("#logindiv").hide();
              $("#logintoggle").show();
              $("#reg_agentdiv").toggle();
              $("#agenttoggle").hide();
              $("#reg_orgdiv").hide();
              $("#orgtoggle").show();
            });
         $("#agenttogglescnd").click(function() 
            {
              $("#logindiv").hide();
              $("#logintoggle").show();
              $("#reg_agentdiv").toggle();
              $("#agenttoggle").hide();
              $("#reg_orgdiv").hide();
              $("#orgtoggle").show();
            });
       //Aorganization button clicked //
        $("#orgtoggle").click(function()
            {
              $("#logindiv").hide();
              $("#logintoggle").show();
              $("#reg_agentdiv").hide();
              $("#agenttoggle").toggle();
              $("#reg_orgdiv").toggle();
              $("#orgtoggle").hide ();
             });
         $("#orgtogglescnd").click(function()
            {
              $("#logindiv").hide();
              $("#logintoggle").show();
              $("#reg_agentdiv").hide();
              $("#agenttoggle").toggle();
              $("#reg_orgdiv").toggle();
              $("#orgtoggle").hide ();
             });


                 //login button clicked //
        $("#logintoggle").click(function()
           {
              $("#logindiv").toggle();
              $("#logintoggle").hide();
              $("#reg_agentdiv").hide();
              $("#agenttoggle").show();
              $("#reg_orgdiv").hide();
              $("#orgtoggle").show();
            });
         $("#logintogglescnd").click(function()
           {
              $("#logindiv").toggle();
              $("#logintoggle").hide();
              $("#reg_agentdiv").hide();
              $("#agenttoggle").show();
              $("#reg_orgdiv").hide();
              $("#orgtoggle").show();
            });

    });
$(document).ready(function() {
      $("#aaa").hide();
      $("#Password").keydown(
        function(){
          if ($(this).val()== '') {
            $("#aaa").hide();
          }
          else{
             $("#aaa").show();
          }

        });
            
            }); 
$(document).ready(function() {
      $("#bbb").hide();
      $("#Password1").keydown(
        function(){
          if ($(this).val()== '') {
            $("#bbb").hide();
          }
          else{
             $("#bbb").show();
          }

        });
            
            }); 
/*$(document).ready(function() {
        $("#otp").hide();
        $("#ver_otp").hide();
           $("#aaa").click(function()
           {
            $("#otp").show();
        $("#ver_otp").show();
         $("#aaa").hide();
              
            });
            
        });*/
/*$(document).on('click','#aaa',function() {
$.ajax({
        type : "post",
        url : "www.way2sms.com/api/v1/sendCampaign"
});
});*/
</script>
</body>
</head>
</html>