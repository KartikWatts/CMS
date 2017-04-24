<?php
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

echo "Thank you for using our CMS <br>";
echo "<h3>You are Logged out succesfully.</h3>";
header( "refresh:2;url=index.php" );
?>