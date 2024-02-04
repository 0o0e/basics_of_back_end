<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a Subscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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

        .column {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 50vh;
            height: 65vh;
            margin: 0 1%;
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .column:hover {
            transform: scale(1.05);
        }

        form {
            text-align: center;
        }

        h1 {
            text-align: center;
            font-style: italic;
            font-family: Georgia, serif;
            margin-bottom: 20px;
        }

        button {
            background-color: #05445E;
            color: #D4F1F4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            padding: 14px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #03364E;
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

<form method="post" action="z_profile.php">

    <h1>Choose a Subscription</h1>


    <div style="text-align:center;" class="row">

        <div class="column">
            <h2>Free</h2> 
            <p>Good if you only want to look through the website and search for companies! <br><br>
                - Look through the website <br>
                - Give feedback<br>
                - Contact companies and other users <br>
            </p>
            <button type="submit" name="next"  value="normal">Normal Subscription</button>
        </div>

        <div class="column">
            <h2>€5,95 /month</h2>
            <p>Good if you only want to look through the website and search for companies! <br><br>
                - Look through the website <br>
                - Give feedback<br>
                - Contact companies and other users <br>
            </p>
            <button type="submit" name="next" value="pro">Pro Subscription</button>
        </div>

        <div class="column">
            <h2>€9,95 /month</h2> 
            <p>Good if you only want to look through the website and search for companies! <br><br>
                - Look through the website <br>
                - Give feedback <br>
                - Contact companies and other users <br>
                - Customize profile <br>
                - Make ads
            </p>
            <button type="submit" name="next"  value="elite" >Elite Subscription</button>
        </div>
    
    </div>

</form>

</body>
</html>
