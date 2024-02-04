

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Customization</title>
  <style>
    body {
      font-family: 'Georgia', serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    #sidebar {
      text-align: center;
      font-size: 20px;
      display: block;
      height: 100%;
      width: 200px;
      position: fixed;
      background-color: #333;
      color: white;
      box-sizing: border-box;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      font-style: italic;
      font-size: 20px;
      font-weight: bold;
    }

    li {
      margin-bottom: 20px;
    }

    .sidebar a {
      text-decoration: none;
      color: white;
      display: block;
      padding: 15px;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #555;
    }

    #content {
      text-align: center;
      margin-left: 220px;
      margin-right: 20px;
      font-size: 28px;
      padding: 20px;
      box-sizing: border-box;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .profileimage {
      width: 150px; 
      height: 150px; 
      border-radius: 50%; 
      margin: 20px 0;

    }
  </style>


</head>
<body>

  <div id="sidebar">

    <h2>Menu</h2>
    <img id="profileimage" src="profilepicture.png" alt="Profile Picture" class="profileimage">

    <h2 style="font-size: 3vh;" id="usernameDisplay"></h2>

    <ul style="margin-top:50px;" class="sidebar">
      <li><a href="/homepage.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="/z_signup.php">Sign up</a></li>
    </ul>
  </div>

  <div id="content">
    <h1 style="font-size: 50px; font-style: italic; margin: 20px;">Profile Customization</h1>

    <form method="post" enctype="multipart/form-data">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="profilePicture">Profile Picture:</label>
      <input type="file" id="profilePicture" name="profilePicture">

      <label for="website">Website:</label>
      <input type="url" id="website" name="website">

      <label for="pronouns">Pronouns:</label>
      <input type="text" id="pronouns" name="pronouns">

      <button type="submit">Save Changes</button>
    </form>
  </div>


<script>
  document.addEventListener('DOMContentLoaded', function () {

    function handleFormSubmit(event) {
      event.preventDefault(); 

      var profilepictureinput = document.getElementById('profilePicture');
      var profilepicturefile = profilepictureinput.files[0];

      var usernameInput = document.getElementById('username');
      var usernameValue = usernameInput.value;

      if (usernameValue.length > 10) {
      alert('Username cant be longer than 10 characters.');
      return;
    }


      if (profilepicturefile) {
        var profileImage = document.getElementById('profileimage');
        var reader = new FileReader();

        reader.onload = function (e) {
          profileImage.src = e.target.result;
        };

        reader.readAsDataURL(profilepicturefile);
      }

      var usernameDisplay = document.getElementById('usernameDisplay');
      usernameDisplay.textContent = usernameValue;

    }

    

    var form = document.querySelector('form');
    form.addEventListener('submit', handleFormSubmit);
  });
</script>

</body>
</html>
