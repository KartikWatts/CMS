<?php
session_start();
include "define.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
      <div class="w3-third">

        <div class="w3-container w3-panel w3-red">
            Update Information
        </div>
        <form class="w3-container" action="updated.php" method="POST" enctype="multipart/form-data">
               
               <label class="w3-container w3-text-purple">First name  :
                   <input class="w3-input" type="text" name="fname1" value="<?php echo $fname; ?>">
               </label>
               <label class="w3-container w3-text-purple">Last name  :
                   <input class="w3-input" type="text" name="lname1" value="<?php echo $lname; ?>">
               </label>
               <label class="w3-container w3-text-purple">E-mail ID  :
                   <input class="w3-input" type="text" name="mail1" value="<?php echo $mail; ?>">
               </label>
               <label class="w3-container w3-text-purple">Phone No.  :
                   <input class="w3-input" type="tel" name="phone1" value="<?php echo $phone; ?>">
               </label>
               <label class="w3-container w3-text-purple">Password  :
                   <input class="w3-input" type="password" name="pass1" value="<?php echo $pass; ?>">
               </label>
               <label class="w3-container w3-text-purple">Profile Pic  :</label>
               <div class="w3-display-container">
                <img src="images/<?php print $image; ?>" style="width:100%;max-width:200px;" alt="Profile Pic">
               </div>
            <input class="w3-input" type="file" name="image1" value="<?php echo $image; ?>">
            <br>
            <input class="w3-btn w3-orange w3-round" type="submit" name="" value="Update">
        </form>
     </div>
     <br>
     <br>
    </body>
</html>