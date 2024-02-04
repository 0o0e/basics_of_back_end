<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            display: inline-block;
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
            width: 22%;
            margin: 0 1%;
        }

        .column img {
            width: 100%; 
        }

        .column p {
            display: inline-block;
            text-align: center;
            margin-left: 10vh; 
            margin-right: 10vh;
        }

        .horizontal-div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .horizontal-div img {
            max-width: 100%;
            height: auto;
            width: 35vh;
            margin-right: 10vh;
            margin-left: 100px;
        }

        .horizontal-div p {
            text-align: left;
            font-size: 28px;
            margin-left: 7vh;
            max-width: 850px;
            font-style: italic;
            font-family: Georgia;

        }

        form {
            text-align: center;
            max-width: 300px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin: 8px 0;
        }

        input, textarea {
            text-align: center;
            width: 150%;
            padding: 6px;
            margin: 4px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 8px;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: gray;
        }


        footer {
            background-color: #000;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
        }
        a:hover{
            background-color: gray;
        }

        a {
            color: #fff;
            text-decoration: underline;
        }
        .left-side {
            align-items: center;
            flex: 1;
        }

                
        .right-side {
            display: flex;
            flex: 2; 
            justify-content: space-around;
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
    <h1 style="font-size: 50px; text-align: center; font-style: italic; font-family: Georgia; serif; margin-left: 32vw; margin-right: 32vw;">Fem Power Connect: Where Strength Meets Unity</h1>
    <p style="text-align: center; margin-left: 32vw; margin-right: 32vw;">Fem Power Connect: Igniting Possibilities, One Connection at a Time. Join a Community Where Women Empower, Inspire, and Flourish Together on the Journey of Self-Discovery.</p>

    <div class="container" style="text-align: center;">
        <ul>
            <li>Flourish</li>
            <li>Collaboration</li>
            <li>Empowering Dreams</li>
            <li>Inspiration</li>
        </ul>
    </div>

    <div class="row">
        <div class="column">
            <a href="/" target="_blank">
            <img style="margin-bottom: 180px;" src="/picture1.webp"></a>
        </div>

        <div class="column">
            <a href="/" target="_blank">
            <img src="/picture1.webp"></a>
        </div>
        
        <div class="column">
            <a href="/" target="_blank">
            <img src="/picture1.webp"></a>
        </div>  
    </div>

    <h1 style="margin-left: 60vh; margin-right: 60vh; font-size: 50px;">Ready to Transform Your Journey? Discover Why Fem Power Connect Is Your Gateway to Empowerment</h1>


    <div class="row">
        <div class="column">
            <h3 style="font-style: italic;">Why Choose Fem Power Connect?</h3>
            <p style="margin-bottom: 300px;">Uncover the reasons Fem Power Connect stands out as the ultimate platform for women empowerment. Explore how our community, values, and commitment to your growth make us the ideal choice for your journey.</p>
        </div>

        <div class="column">
            <h3 style="font-style: italic;">The Fem Power Connect Experience: Where Unity Thrives.</h3>
            <p>Immerse yourself in the unique experience of Fem Power Connect. From fostering connections to celebrating achievements, this text delves into the vibrant community that sets us apart and empowers women to flourish together.</p>
        </div>
        
        <div class="column">
            <h3 style="font-style: italic;">Your Voice Matters: Fem Power Connect’s Commitment to Empowerment</h3>
            <p>Explore how Fem Power Connect goes beyond connectivity to ensure your voice is not just heard but celebrated. Learn about our dedication to empowerment, providing a space where each woman’s story is valued and contributes to the collective strength of our community.</p>
        </div>  

        <div class="column">
            <h3 style="font-style: italic;">Thrive with Fem Power Connect: Empowerment Beyond Boundaries</h3>
            <p>Delve into the opportunities for growth, collaboration, and support that Fem Power Connect offers. This text explores how our platform propels you toward your fullest potential, emphasizing the collaborative spirit that makes us more than just a connection— we are a catalyst for your success.</p>
        </div>     
    </div>


    <div class="container">
        <div class="horizontal-div">
            <img src="/picture2.webp" alt="Description of the image">
            <p>
                “Fueling empowerment through connection, Fem Power Connect sparks inspiration, unity, and the collective strength of women rising together.” <br>
            </p>
        </div>
    </div>

    <form method="post" class="container">
        <input type="text" id="firstName" placeholder="First name(required)" name="firstName" required>

        <input type="text" id="lastName"placeholder="Last name(required)" name="lastName" required>

        <input type="email" id="email" placeholder="Email(required)" name="email" required>

        <textarea id="message" name="message" placeholder="Message" rows="4"></textarea>

        <input type="submit" value="Send">
    </form>


</div>

<footer>
    <div class="left-side">
      <img class="logo" src="logo.png" alt="Company Logo" class="logo">
      <div class="company-description">
        <p style="text-align: center;">We are a local organization that provides support within the local community to organizations that involve volunteers.</p>
      </div>
    </div>

    <div class="right-side">

      <div class="column">
        <h4>Get in Touch</h4>
        <a href="#">Contact Us</a>
        <p>(123)-456-7890</p>
        <p>hello@mygroovydomain.com</p>
      </div>

      <div class="column">
        <h4>Who Are We</h4>

        <li><a href="#">About</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
 
      </div>

      <div class="column">
        <h4>Follow Us</h4>
        <p><a href="#">Facebook</a></p>
        <p><a href="#">Twitter</a></p>
        <p><a href="#">Instagram</a></p>
      </div>
    </div>
  </footer>


</body>
</html>
