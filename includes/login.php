<?php
require_once('load.php');

// Handle logins
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_status = $login->verify_login($_POST);
}

// Verify session
if ( $login->verify_session() ) {
    $user = $login->user;

    header('Location: ../index.php');
    exit;
        echo '<script>alert("Logined In!");</script>';
} else {
    //include( 'login.php' );
    echo '<p>Your username and password are incorrect. Try again.</p>';
    echo '<p><a href="../index.php">home</a></p>';
}
