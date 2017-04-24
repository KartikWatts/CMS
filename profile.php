<?php
session_start();
include "define.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
        <!--<div style="text-align:right">
        
    </div>
    -->
<div class="w3-row">

  <div class="w3-container w3-twothird">
  
  <div class="w3-container w3-xxlarge w3-panel w3-red w3-hover-shadow w3-text-shadow">
  Content Management System
  </div>
  <div class="w3-container">
          
    <div class="w3-container w3-text-deep-orange w3-large">
        Hello <?php echo $fname;?>.Thankyou for visiting. You are welcome here.
       <!-- <a class="w3-container" href="profile.php"><img src="home.png" style="width:100%;max-width:50px" alt="HOME">
    </a>  -->
    </div> 
  </div>
  <br>
  <hr>
  <div class="w3-container w3-large w3-panel w3-orange w3-hover-deep-orange w3-text-shadow">
  Today's Quote for you is:
  </div>

  <div class="w3-panel w3-light-grey">
  <span style="font-size:150px;line-height:0.6em;opacity:0.2">&#10077;</span>
  <p class="w3-xlarge w3-center" style="margin-top:-40px">
  <strong>नैनं छिन्दन्ति शस्त्राणि नैनं दहति पावकः ।<br> 
          न चैनं क्लेदयन्त्यापो न शोषयति मारुतः ।।</strong></p>
  <div class="w3-container w3-left-align">
  <p>- ‎श्रीमद्‍भगवद्‍गीता २.२३</p>
  </div>
</div>

  </div>

  <div class="w3-container w3-third">
      
    <div class="w3-row">

        <div class="w3-container w3-twothird">

            <div class="w3-margin-left w3-xxlarge w3-container w3-text-red">
                जय श्री राम 
            </div>
        
        </div>

        <div class="w3-container w3-third">

                <div class="w3-display-container">
                    <img src="images/<?php echo $image; ?>" class="w3-image w3-circle" style="height:100%;max-height:100px;" alt="Profile Pic">
                </div>
                <a class="w3-container w3-small w3-btn w3-red w3-text-shadow" href="logout.php"><b>LOG OUT</b></a>

        </div>

    </div>

      <div class="w3-container">
         <?php include "show.php";?>
      </div>
  </div>

</div>
<hr>
<footer class="w3-container w3-teal w3-xlarge w3-bottom">
<div class="w3-center">&copy; Developed by <a href="https://in.linkedin.com/in/kartik-arora-083b05106"
 <b class="w3-hover-red">"Kartik Arora"</b></a></div>
</footer>

    </body>
</html>