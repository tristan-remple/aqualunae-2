<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Pink Triangle Day</title>
<meta name="title" content="NSRAP Pink Triangle Day" />
<meta name="description" content="Learn about Pink Triangle Day" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Pink Triangle Day" />
<meta property="og:description" content="Learn about Pink Triangle Day" />
<meta property="og:url" content="https://nsrap.ca/about/events/pink-triangle-day.php" />
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
            <h1>Pink Triangle Day</h1>
         <?php
            
            $text = fopen("../text/pink-triangle-day.txt", "r") or die("The specified text could not be found.");
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
               <img class="sideimg fullwidth" src="../images/pride-2019-1.jpg">
            </div>
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
               <a href="http://pinktriangleday.com/" class="navlink yellowb solo fullwidth"><div class="padded">Learn More</div></a>
               <a href="http://facebook.com/nsrap" class="navlink yellowb solo fullwidth"><div class="padded">Facebook Events</div></a>
               <a href="mailto:nsrap@nsrap.ca" class="navlink yellowb solo fullwidth"><div class="padded">NSRAP Email</div></a>
               <a href="mailto:PrideGuide@eastlink.ca" class="navlink yellowb solo fullwidth"><div class="padded">Pride Guide Email</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>