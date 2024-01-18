<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Archive</title>
<meta name="title" content="NSRAP Archive" />
<meta name="description" content="NSRAP Statement on Teacher-Government Relations" />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Archive" />
<meta property="og:description" content="NSRAP Statement on Teacher-Government Relations" />
<meta property="og:url" content="https://nsrap.ca/issues/archive/teacher-government.php" />
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
    
      <div class="textbox ninewide" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>NSRAP Statement on Teacher-Government Relations</h1>
         <?php
            
            $text = fopen("../../text/teacher-government.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
         <a href="https://www.facebook.com/nsteachersunion/" class="navlink greenb fullwidth solo"><div class="padded">Nova Scotia Teachers Meeting</div></a>
         <a href="https://nslegislature.ca/members/profiles-bios?fbclid=IwAR1iAFVtJJ_Y5K9Yab0xqo8zOdZr5HwKT625LFjkNHC9yT1l-DcE0fEgAp8" class="navlink greenb fullwidth solo"><div class="padded">MLA List</div></a>
      </div>
    
    </div>
    
    <?php
    
    include("../../text/sub2-footer.html");
    
    ?>
    
</body>
</html>