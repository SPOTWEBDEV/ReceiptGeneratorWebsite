<?php
session_start(); // Always start the session first

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Optional: Redirect to login or home page
    header("Location: ../../login"); // Change to your actual login page
    exit;
} else {
    // User not logged in or already logged out
    header("Location: ../../login");
    exit;
}
?>
