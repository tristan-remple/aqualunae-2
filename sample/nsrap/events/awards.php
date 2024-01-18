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

<title>NSRAP Community Awards</title>
<meta name="title" content="NSRAP Hero Awards" />
<meta name="description" content="Learn about the Hero Awards from the Nova Scotia Rainbow Action Project." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Hero Awards" />
<meta property="og:description" content="Learn about the Hero Awards from the Nova Scotia Rainbow Action Project." />
<meta property="og:url" content="https://nsrap.ca/events/hero.php" />
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
    
   <div class="thirdbox ninewide">
      <div class="twothird">
         <div class="textbox fullwidth" tabindex="0" aria-label="main text">
            <div class="padded">
               <h1>Community Awards</h1>
            <?php
               
               $text = fopen("../text/awards-main.txt", "r") or die("The specified text could not be found.");
                 while (!feof($text)) {
                   echo fgets($text) . "<br>";
                   }
                 fclose($text);
                 
               ?>
            </div>
         </div>
      </div>
      <div class="onethird">
         <div class="sideimgbox fullwidth">
            <img class="sideimg fullwidth" src="../images/rainbow-flag-city-hall-2016.jpg">
         </div>
         <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
            <a href="https://docs.google.com/forms/d/1oxlF0A9iikwm8ixG8NW5Ex8RQYX4mKkeNlVYF0LvmRM/edit" class="navlink yellowb solo fullwidth"><div class="padded">Nominations</div></a>
            <a href="mailto:events@nsrap.ca" class="navlink yellowb solo fullwidth"><div class="padded">Email</div></a>
         </div>
      </div>
   </div>
   
   <div class="maincontainer" role="region" aria-label="Rev. Darlene Young Community Award">
      
      <div class="textbox ninewide">
         <div class="padded">
            <h1>Rev. Darlene Young Community Award</h1>
         <?php
            
            $text = fopen("../text/awards-darlene.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
      </div>
    <br>
    <div class="maincontainer" role="region" aria-label="Raymond Taavel Media Award">
    <div class="textbox ninewide">
         <div class="padded">
            <h1>Raymond Taavel Media Award</h1>
         <?php
            
            $text = fopen("../text/awards-raymond.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
    </div>
    <br>
    <div class="maincontainer" role="region" aria-label="Turret Stewardship Award">
    <div class="textbox ninewide">
         <div class="padded">
            <h1>Turret Stewardship Award</h1>
         <?php
            
            $text = fopen("../text/awards-turret.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
    </div>
    <br>
    <div class="maincontainer" role="region" aria-label="The Rising Star Award">
    <div class="textbox ninewide">
         <div class="padded">
            <h1>The Rising Star Award</h1>
         <?php
            
            $text = fopen("../text/awards-star.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
    </div>
    <br>
    <div class="maincontainer" role="region" aria-label="Leighann Wichman Lifetime Achievement Award">
    <div class="textbox ninewide">
         <div class="padded">
            <h1>Leighann Wichman Lifetime Achievement Award</h1>
         <?php
            
            $text = fopen("../text/awards-leighann.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
    </div>
    <br>
    <div class="maincontainer" role="region" aria-label="QTBIPOC Champion Award">
    <div class="textbox ninewide">
         <div class="padded">
            <h1>QTBIPOC Champion Award</h1>
         <?php
            
            $text = fopen("../text/awards-qtbipoc.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="biorow ninewide">
        <img class="icon" src="../images/jj-lyon-gay-elder-health-2016-crop.jpg">
        <div class="bio textbox">
            <div class="padded">
               <a href="https://google.com">
                  <h2>Name</h2>
               </a>
               This page will auto-populate based on a database table. I have not yet received the information required to create that table.
            </div>
        </div>
      </div>
      <?php
      
      $sql = "SELECT * FROM award_test";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            if ($row['hide'] == 0) {
            
            echo '<div class="biorow ninewide">
                <img class="icon" src="../images/', $row['icon'], '">
                <div class="bio textbox">
                    <div class="padded">
                    <a href="', $row['link'], '">
                    <h2>', $row['name'], '</h2>
                    </a>',
                        $row['bio'],
                    '</div>
                </div>
              </div>';
          }
          }
        }
      ?>
    </div>
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>