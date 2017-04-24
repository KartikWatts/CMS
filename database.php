<?php
@include "connect.php";

$file_dir= "images";

 foreach ($_FILES as $file_name => $file_array) {
        $file_array["tmp_name"];
        $file_array["name"];
        $file_array["type"];
        $file_array["size"];

        if(is_uploaded_file($file_array["tmp_name"]))
        {
            move_uploaded_file($file_array["tmp_name"],"$file_dir/$file_array[name]") or die("<br>Couldn't Copy");
        }

        if(! get_magic_quotes_gpc())
        {
            $image=addslashes($file_array["name"]);
        }
        else
        {
            $image=$file_array["name"];
        }
    }

if(! get_magic_quotes_gpc() ) 
{
    $user=addslashes($_POST['user1']);
    $fname=addslashes($_POST['fname1']);
    $lname=addslashes($_POST['lname1']);
    $mail=addslashes($_POST['mail1']);
    $pass=addslashes($_POST['pass1']);
    $phone=addslashes($_POST['phone1']);
}
else
{
    $user=$_POST['user1'];
    $fname=$_POST['fname1'];
    $lname=$_POST['lname1'];
    $mail=$_POST['mail1'];
    $pass=$_POST['pass1'];
    $phone=$_POST['phone1'];
}

$_SESSION["user"]="$user";
$_SESSION["fname"]="$fname";
$_SESSION["lname"]="$lname";
$_SESSION["mail"]="$mail";
$_SESSION["phone"]="$phone";
$_SESSION["pass"]="$pass";
$_SESSION["image"]="$image";

    $user= $_SESSION["user"];
    $fname=$_SESSION["fname"];
    $lname=$_SESSION["lname"];
    $mail=$_SESSION["mail"];
    $phone=$_SESSION["phone"];
    $pass=$_SESSION["pass"];
    $image=$_SESSION["image"];
?>
