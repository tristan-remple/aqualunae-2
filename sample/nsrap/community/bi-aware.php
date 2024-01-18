<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Bisexual Awareness</title>
<meta name="title" content="NSRAP Bisexual Awareness" />
<meta name="description" content="Learn about the bi-umbrella spectrum" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Bisexual Awareness" />
<meta property="og:description" content="Learn about the bi-umbrella spectrum" />
<meta property="og:url" content="https://nsrap.ca/about/community/bi-aware.php" />
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
            <h1>Bi-Umbrella Awareness</h1>
            I have not received the text for this page, so I am substituting the asexuality text for the time being.
            <br><BR>
         <?php
            
            $text = fopen("../text/asexuality.txt", "r") or die("The specified text could not be found.");
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
               <img class="sideimg fullwidth" src="../images/pride-signs-2016.jpg">
            </div>
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
               <a href="https://www.aceweek.org/" class="navlink orangeb solo fullwidth"><div class="padded">Asexuality Awareness Week</div></a>
               <a href="http://www.asexuality.org/" class="navlink orangeb solo fullwidth"><div class="padded">AVEN</div></a>
               <a href="https://www.letshangout.com/content-an-asexuality-resource-guide.php" class="navlink orangeb solo fullwidth"><div class="padded">Further Reading</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>