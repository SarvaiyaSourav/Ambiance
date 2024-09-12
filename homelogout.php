<?php

session_start();


if (isset($_SESSION['user_id'])) {
    
    $_SESSION = array();

    
    session_destroy();
}


header("Location: login.php"); 
exit();
?>

<?php
// Start or resume a session
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']);

?>
