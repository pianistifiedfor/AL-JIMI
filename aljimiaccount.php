<!DOCTYPE html>
    <html>
        <head>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2666574082441212"
     crossorigin="anonymous"></script>
        
          <link rel="icon" href="LH.jpg" sizes="16x16" type="image/jpg"> 
            <meta charset="utf-8">
            <title>
                Al Jimi Account
            </title>
        </head>
        <body>
    <style>
                        /* Add a black background color to the top navigation */
                body{
                  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                  font-weight: 300;
                  overflow: auto;
                  color: black;
                }
.topnav {
  background-color: rgb(0, 0, 0);
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ffffff;
  color: #070313;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #070313;
  color: #ffffff;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

.kullanga{
  font-weight: 300;
  text-align: center;
}

.volk{
  text-align: center;
}

/* width */
::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #070313;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(0, 0, 0);
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgb(0, 0, 0);
}
.registration{
    border-top: solid 1px black;
    border-bottom: solid 1px black;
    border-left: solid 1px black;
    border-right: solid 1px black;
    padding: 10px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 300;
    color: black;
    margin-top: -100px;
    margin-left: 500px;
    margin-right: 500px;
    text-align: center;
}

.onehtwoone{
    font-size: 20px;
    font-weight: 300;
    text-align: center;
    font-weight: 300;
}

.kioskgo{
    border: solid 1px black;
    padding: 5px;
    font-weight: 300;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    margin-top: 10px;
    margin-bottom: 10px;
}

.emailtext{
    border: solid 1px black; 
    padding: 5px;
    font-weight: 300;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    margin-top: 10px;
    margin-bottom: 10px;
}

.numberica{
    border: solid 1px black;
    padding: 5px;
    font-weight: 300;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    margin-top: 10px;
    margin-bottom: 10px;
}

.pass{
    border: solid 1px black;
    padding: 5px;
    font-weight: 300;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    margin-top: 10px;
    margin-bottom: 10px;
}

.register{
    border: solid 1px black;
    background-color: black;
    color: white;
    padding: 5px;
    margin-top: 15px;
    border-radius: 0px;
    font-weight: 300;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
}

.register input[value="register"]{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 300;
}

.lhonejpg{
  margin-right: 0px;
}

.name{
  text-align: center;
  margin-bottom: 20px;
}

    </style>
  
    <div class="topnav" id="myTopnav">
        <a href="index.html" class="active kulk">Home</a>
        <a href="gallery.html" >Gallery</a>
        <a href="contact.html" >Contact</a>
        <a href="about.html" >About</a>
        <a href="orders.html" >Orders</a>
        <a href="aljimiaccount.html">Al Jimi Account</a>
      
          <i class="fa fa-bars"></i>
        </a>
   
      </div>
      <img src="LH1.jpg" class="lhonejpg" width="200px"> <div class="registration">
<h2 class="onehtwoone">Create an Account</h2>

    <form action="aljimiaccount.php" method="post">
      <label class="name" for="firstName">Name</label><br>
        <input class="kioskgo" type="text" name="firstName" placeholder="Your Name"><br>

        <label for="lastName" class="email">Email Address*</label><br>
        <input class="emailtext" type="text" name="email" placeholder="Email Address"><br>
        
        <label class="number" for="mobileNumber">Mobile Number*</label><br>
        <input class="numberica" type="text" name="mobileNumber" placeholder="+971 Mobile number"><br>

        <label class="password" for="passWord">Password*</label><br>
        <input class="pass" type="password" name="inputPassword" placeholder="Password"><br>

        <input class="register" type="button" Id="sufi" name="sioko" value="Register" href="welcome.html"><br>
        <script>
 <?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("data") or die (mysql_error());


?>

<script type="text/javascript">
    document.getElementById("sufi").onclick = function () {
        location.href = "welcome.html";
    };
</script>


        <p>
           By registering, you agree to our <a target="_blank" href="privacypolicy.html">Privacy Policy</a> and <a target="_blank" href="termsofservice.html">Terms of Service</a>.<br>
        </p>

        <a href="login.html">Already have an account?</a><br>
    </form>

    </div>
  
    </body>
</html>
