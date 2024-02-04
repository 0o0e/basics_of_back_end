<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Save profile data in session
    $_SESSION["profileData"] = $_POST;
    header("Location: final_page.php");
    exit();
}
?>