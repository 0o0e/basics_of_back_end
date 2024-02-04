<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    nav {
      background-color: #444;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    .container {
      text-align: center;
      margin: 20px auto;
      padding: 20px;
    }

    li {
      padding: 16px;
      text-decoration: none;
    }

    ul {
      text-align: center;
      font-style: italic;
      font-size: 30px;
      font-weight: bold;
    }

    .column {
      display: inline-block;
      text-align: center;
      vertical-align: top; 
      width: 30%;
      margin: 0 1%;
    }

    img {
      width: 380px;
      display: inline-block;
      text-align: center;
    }

    p {
      display: inline-block;
      text-align: center;
      margin-left: 20vh;
      margin-right: 20vh;
    }

    form {
      width: 50%;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    h1 {
      color: black;
      font-size: 50px; 
      text-align: center; 
      font-style: italic; 
      font-family: Georgia, serif; 
      margin-left: 32vw; 
      margin-right: 32vw;
    }

    label {
      display: block;
      margin-top: 10px;
      margin-bottom: 5px;
      color: black;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="tel"],
    
    select {
      width: calc(100% - 24px);
      padding: 12px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 5px;
    }

    button[type="submit"] {
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: calc(100% - 24px);
      padding: 14px;
    }

    button[type="submit"]:hover {
      background-color: grey;
    }

  </style>

</head>


<body>

  <nav>
  <a href="/homepage.php">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="#">Services</a>
    <a href="/z_signup.php">Sign up</a>
  </nav>

  <div class="container">
    <h1>Create an Account</h1>
    <form method="post" action="z_subscription.php">
      <label for="name"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="name" required>

      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="mail"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="mail" required>

      <label for="phone"><b>Phone Number</b></label>
      <input type="tel" placeholder="Enter Phone Number" name="phone">

      <label for="userType"><b>User Type</b></label>
      <select id="userType" name="userType" onchange="toggleFields()">
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

        <label for="serviceType"><b>Service Type</b></label>
        <input type="text" placeholder="Enter Your Service Type" name="serviceType">
      </div>

      <button type="submit">Next</button>

        <input type="checkbox" checked="checked" name="remember"> Remember me
    </form>
  </div>

<script>
  function toggleFields() {
    var userType = document.getElementById("userType").value;
    var companyFields = document.getElementById("companyFields");
    var entrepreneurFields = document.getElementById("entrepreneurFields");

    if (userType === "company") {
        companyFields.style.display = "block";
        entrepreneurFields.style.display = "none";
    } else if (userType === "entrepreneur") {
        companyFields.style.display = "none";
        entrepreneurFields.style.display = "block";
    } else {
        companyFields.style.display = "none";
        entrepreneurFields.style.display = "none";
    }
  }
</script>
</body>
</html>
