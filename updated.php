<?php
include "connect.php";
include "define.php";

$file_dir= "images";

 foreach ($_FILES as $file_name => $file_array) {
        print "path: ".$file_array["tmp_name"];
        print "<br>name: ".$file_array["name"];
        print "<br>type: ".$file_array["type"];
        print "<br>size: ".$file_array["size"];

        if(is_uploaded_file($file_array["tmp_name"]))
        {
            move_uploaded_file($file_array["tmp_name"],"$file_dir/$file_array[name]") or die("<br>Couldn't Copy");
            print "<br>Picture Uploaded<br><br>";
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
    $fname=addslashes($_POST['fname1']);
    $lname=addslashes($_POST['lname1']);
    $mail=addslashes($_POST['mail1']);
    $pass=addslashes($_POST['pass1']);
    $phone=addslashes($_POST['phone1']);
}
else
{
    $fname=$_POST['fname1'];
    $lname=$_POST['lname1'];
    $mail=$_POST['mail1'];
    $pass=$_POST['pass1'];
    $phone=$_POST['phone1'];
}


$sql = "UPDATE cms SET fname='$fname', lname='$lname', mail='$mail', phone='$phone', pass='$pass', img='$image' WHERE id='$id'";

if($conn->query($sql)===TRUE)
{
    echo $fname.".<br>Your Information updated Successfuly.";
}
else
{
    echo("Sorry... Couldn't Register.<br>". $conn->error);
}

$_SESSION["fname"]=$fname;
$_SESSION["lname"]="$lname";
$_SESSION["mail"]="$mail";
$_SESSION["phone"]="$phone";
$_SESSION["pass"]="$pass";
$_SESSION["image"]="$image";

header("url=profile.php");

?>