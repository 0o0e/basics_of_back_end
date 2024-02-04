<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    // Save user data in session
    $_SESSION["userData"] = $_POST;
    header("Location: subscription.php");
    exit();
}
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email],  input[type=tel]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #D4F1F4;
  color: #05445E;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #75E6DA;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: blue;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     
  }
}
</style>
</head>
<body>

<h1>make an account</h1>


<!--  -->

<!--  -->
<form method="post" action="subscription.php">



    <div class="container">
      <label for="name"><b>first name</b></label>
      <input type="text" placeholder="Enter First Name" name="name" required>

      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="mail"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="mail" required>

      <label for="phone"><b>Phone Number</b></label>
      <input type="tel" placeholder="Enter Phone Number" name="phone">


      <label style="margin-bottom:50px;" for="userType"><b>User Type</b></label>
      <select style="margin-bottom:20px; margin-top:15px;" id="userType" name="userType" onchange="toggleFields()">
        <option value="normal">Normal Client</option>
        <option value="entrepreneur">Female Entrepreneur</option>
        <option value="company">Company</option>
      </select>

      <div id="companyFields" style="display:none;">
        <label for="companyName"><b>Company Name</b></label>
        <input type="text" placeholder="Enter Company Name" name="companyName">
      </div>

      <div id="entrepreneurFields" style="display:none;">
        <label for="kvk"><b>KVK</b></label>
        <input type="text" pattern="\d{8}" title="Please enter 8 digits" placeholder="Enter KVK Number (8 digits)" name="kvk">
        

        <label for="companyName"><b>Company Name</b></label>
        <input type="text" placeholder="Enter Company Name" name="companyName">

        <label for="companyAdress"><b>Company Adress</b></label>
        <input type="text" placeholder="Enter Your Company Adress" name="companyAdress">

        
        <label for="serviceType"><b>service type</b></label>
        <input type="text" placeholder="Enter Your Service Type" name="serviceType">



      </div>

      <!-- <form method="post" action="subscription.php"> -->

      
      <button type="submit">next</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
</form>
<!--  -->

<!--  -->

<script>
function toggleFields() {
    var userType = document.getElementById("userType").value;
    var entrepreneurFields = document.getElementById("entrepreneurFields");
    var companyFields = document.getElementById("companyFields");

    entrepreneurFields.style.display = (userType === "entrepreneur") ? "block" : "none";
    companyFields.style.display = (userType === "company") ? "block" : "none";
}
</script>

</body>
</html>
