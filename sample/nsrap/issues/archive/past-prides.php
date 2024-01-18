<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Archive</title>
<meta name="title" content="NSRAP Archive" />
<meta name="description" content="NSRAP's participation in past pride events" />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Archive" />
<meta property="og:description" content="NSRAP's participation in past pride events" />
<meta property="og:url" content="https://nsrap.ca/issues/archive/past-prides.php" />
<meta property="og:type" content="article" />
<meta property="og:image" content="../../images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="../../images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    
    <?php
    
    include("../../text/sub2-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
        
        <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
         <a href="https://www.halifaxpride.com/" class="navlink greenb fullwidth solo"><div class="padded">Halifax Pride</div></a>
      </div>
    
      <div class="textbox ninewide" tabindex="0" role="region" aria-label="2015">
         <div class="padded">
            <h1>Pride 2015 - What We Have & What We Haven’t</h1>
         <?php
            
            $text = fopen("../../text/pride-2015.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="textbox ninewide" tabindex="0" role="region" aria-label="2014">
         <div class="padded">
            <h1>Pride 2014</h1>
         <?php
            
            $text = fopen("../../text/pride-2014.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="textbox ninewide" tabindex="0" role="region" aria-label="2013">
         <div class="padded">
            <h1>Pride 2013</h1>
         <?php
            
            $text = fopen("../../text/pride-2013.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="textbox ninewide" tabindex="0" role="region" aria-label="2012">
         <div class="padded">
            <h1>Pride 2012</h1>
         <?php
            
            $text = fopen("../../text/pride-2012.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="linkcase ninewide" tabindex="0" role="region" aria-label="2011">
         <a href="pride-2011.php" class="navlink greenb fullwidth solo"><div class="padded">Pride 2011 Signs</div></a>
      </div>
    
    </div>
    
    <?php
    
    include("../../text/sub2-footer.html");
    
    ?>
    
</body>
</html>