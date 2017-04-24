<?php
include "connect.php";
include "database.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
      <div class="w3-row">
        <div class="w3-col" style="width:20%">
        <p>
        <a href="profile.php">
            <div class="w3-display-container">
                <img src="home.png" style="width:100%;max-width:100px; "class="w3-hover-opacity-min" alt="HOME">                    
            </div>
        </a>
        </p>
        </div>
      </div>
            
    </div>
    <div class="w3-container w3-twothird">
    <?php include "create.php";?>
    </div>
</body>
</head>