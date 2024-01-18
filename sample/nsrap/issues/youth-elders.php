<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Youth and Elders</title>
<meta name="title" content="NSRAP Youth and Elders" />
<meta name="description" content="Learn about the Nova Scotia Rainbow Action Project's Youth and Elders Project." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Youth and Elders" />
<meta property="og:description" content="Learn about the Nova Scotia Rainbow Action Project's Youth and Elders Project." />
<meta property="og:url" content="https://nsrap.ca/about/issues/youth-elders.php" />
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
            <h1>Youth & Elders Project</h1>
         <?php
            
            $text = fopen("../text/youth-elders.txt", "r") or die("The specified text could not be found.");
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
               <img class="sideimg fullwidth" src="../images/youth-elders-screening-2016-crop.png">
            </div>
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
               <a href="mailto:nsrap@nsrap.ca" class="navlink greenb solo fullwidth"><div class="padded">Email</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>