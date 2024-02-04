<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    // Save subscription data in session
    $_SESSION["subscription"] = $_POST["subscription"];
    header("Location: customize.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <!-- Add necessary meta tags, styles, and scripts -->
</head>
<body>

<h1>Choose a Subscription</h1>

<form method="post" action="customize.php">
    <!-- Subscription options -->
    <label><input type="radio" name="subscription" value="normal"> Normal</label>
    <label><input type="radio" name="subscription" value="elite"> Elite</label>
    <label><input type="radio" name="subscription" value="pro"> Pro</label>

    <button type="submit" name="next">Next</button>
</form>

</body>
</html>
