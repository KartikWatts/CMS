<?php
$sql= "INSERT INTO cms(user,fname,lname,mail,phone,pass,img) VALUES ('$user','$fname','$lname','$mail','$phone','$pass','$image')";
            
if($conn->query($sql)===TRUE)
{
    echo"Thankyou! ". $fname.".<br>You are Registered Successfuly.";
    include "show.php";
}
else
{
    echo("Sorry... Couldn't Register.<br>". $conn->error);
    session_unset(); 

    // destroy the session 
    session_destroy(); 

    header("refresh:2;url=index.php");
}
?>

 