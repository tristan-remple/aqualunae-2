<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Archive</title>
<meta name="title" content="NSRAP Archive" />
<meta name="description" content="Statement on Recent Incidences of Transmisogyny and Transphobia" />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Archive" />
<meta property="og:description" content="Statement on Recent Incidences of Transmisogyny and Transphobia" />
<meta property="og:url" content="https://nsrap.ca/issues/archive/recent-transmisogyny.php" />
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
            <h1>Statement on Recent Incidences of Transmisogyny and Transphobia</h1>
         <?php
            
            $text = fopen("../../text/transmisogyny-2017.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
    
    </div>
    
   <?php
    
    include("../../text/sub2-footer.html");
    
    ?>
    
</body>
</html>