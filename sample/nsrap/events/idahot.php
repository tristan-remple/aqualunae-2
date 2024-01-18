<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP IDAHOT</title>
<meta name="title" content="NSRAP IDAHOT" />
<meta name="description" content="Learn about the International Day against Homophobia and Transphobia" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP IDAHOT" />
<meta property="og:description" content="Learn about the International Day against Homophobia and Transphobia" />
<meta property="og:url" content="https://nsrap.ca/about/events/idahot.php" />
<meta property="og:type" content="article" />
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
            <h1>International Day Against Homophobia & Transphobia</h1>
         <?php
            
            $text = fopen("../text/idahot.txt", "r") or die("The specified text could not be found.");
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
               <img class="sideimg fullwidth" src="../images/idahot pic.png">
            </div>
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
                <a href="https://facebook.com/nsrap" class="navlink yellowb solo fullwidth"><div class="padded">Facebook Events</div></a>
               <a href="https://may17.org/" class="navlink yellowb solo fullwidth"><div class="padded">Learn More</div></a>
               <a href="https://www.iglyo.com/resources/idahot-2015/" class="navlink yellowb solo fullwidth"><div class="padded">Info for Youth</div></a>
               <a href="https://en.may17mai.com/alliees" class="navlink yellowb solo fullwidth"><div class="padded">Info for Allies</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>