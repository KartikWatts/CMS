<?php
include "connect.php";
include "define.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myusername= mysqli_real_escape_string($conn,$_POST["user"]);
    $mypassword= mysqli_real_escape_string($conn,$_POST["pass"]);

    $sql= "SELECT * FROM cms WHERE user='$myusername' and pass='$mypassword'";
    $result= mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $_SESSION["id"]=$row["id"];
        $_SESSION["image"]=$row["img"];
        $_SESSION["fname"]=$row["fname"];
        $_SESSION["lname"]=$row["lname"];
        $_SESSION["phone"]=$row["phone"];
        $_SESSION["mail"]=$row["mail"];
        $_SESSION["pass"]=$row["pass"];
    }


    $count= mysqli_num_rows($result);

    if($count==1)
    {
        if($_SESSION["image"]==NULL)
            $_SESSION["image"]="def.png";       
        
        $_SESSION["user"]="$myusername";

        $f=0;
    header("location: profile.php");
    }
    else
    {
        $f=1;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMS Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
    <body>
        <br>
    <div class="w3-row">
        <div class="w3-third w3-container">
        <?php
        if(@$f==1) 
            include "loginerr.html";
        ?>
            
     <p>
     <div class="w3-leftbar w3-rightbar w3-bottombar w3-border-red w3-round w3-hover-border-blue">
        <div class="w3-container w3-yellow">
  <h2 class="w3-text-red">Login</h2>
</div>
    <form action = "" method = "post" class="w3-container">
        <p>
        <label class="w3-text-blue">UserName  :</label>
        <input class="w3-input" type = "text" name = "user" /></p>
        <p>
        <label class="w3-text-blue">Password  :</label>
        <input class="w3-input" type = "password" name = "pass" /></p>
        <p>             
        <input class="w3-btn w3-purple w3-round" type = "submit" value = " Submit "/></p>
    </form>
    </div>
        <p>
            <div class="w3-panel w3-blue">
                <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
                <h3>Greetings!</h3>
                <p>CMS System &copy; Developed by <a href="https://in.linkedin.com/in/kartik-arora-083b05106"
 <b class="w3-hover-red">"Kartik Arora"</b></a></p>
            </div>
        </p>
    </p>
  </div>
    <div class="w3-third w3-container w3-border-left w3-border-right">
        <p>
        <?php include "form.html" ?>
        </p>
    </div>

    <div class="w3-container w3-third">
        <p>
        <div>
            <img src="index.jpg" style="width:100%;max-width:300px;" class="w3-hover-opacity-min" alt="Welcome">    
        </div>
        <div class="w3-container">
        <div class="w3-container w3-header w3-large w3-text-teal">
        QR Scan for Mobile
        </div>
        <img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=www.cms.noads.biz&amp;qzone=1&amp;margin=0&amp;size=400x400&amp;ecc=L" style="width:100%;max-width:200px;" class="w3-hover-opacity-min" alt="qr code" />
        </div>
        </p>
    </div>

    </div>
    </body>
</html>