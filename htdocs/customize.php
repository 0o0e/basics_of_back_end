<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    // Save customize data in session
    $_SESSION["customizeData"] = $_POST;
    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Add necessary meta tags, styles, and scripts -->
</head>
<body>

<h1>Customize Your Profile</h1>

<form method="post" action="profile.php">
    <!-- Customize profile options -->
    <label for="profilePicture">Profile Picture: <input type="file" name="profilePicture"></label><br>
    <label for="birthday">Birthday: <input type="date" name="birthday"></label><br>
    <label for="website">Website: <input type="text" name="website"></label><br>
    <label for="bio">Bio: <textarea name="bio"></textarea></label><br>

    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
