<?php

include("../db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Board of Directors</title>
<meta name="title" content="NSRAP Board of Directors" />
<meta name="description" content="Learn about the Board of Directors at the Nova Scotia Rainbow Action Project." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Board of Directors" />
<meta property="og:description" content="Learn about the Board of Directors at the Nova Scotia Rainbow Action Project." />
<meta property="og:url" content="https://nsrap.ca/about/board-of-directors.php" />
<meta property="og:type" content="website" />
<meta property="og:image" content="../images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="../images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    
    <?php
    
    include("../text/sub-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
    
      <div class="textbox ninewide" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>Board of Directors</h1>
         <?php
            
            $text = fopen("../text/board-about.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="maincontainer" id="members" role="region" aria-label="board members">
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/events-dandi-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
                <h2>Name</h2>
                This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM board_members";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <h2>', $row['name'], '</h2>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
      </div>
      
      <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
         <a href="../get-involved/board-nomination.php" class="navlink redb incol solo"><div class="padded">Nominations</div></a>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>