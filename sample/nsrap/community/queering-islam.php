<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Queering Islam</title>
<meta name="title" content="NSRAP Queering Islam" />
<meta name="description" content="Queer Islam was be an evening of short presentations on Muslim varieties of queer identities and ongoing issues in Canada." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Queering Islam" />
<meta property="og:description" content="Queer Islam was be an evening of short presentations on Muslim varieties of queer identities and ongoing issues in Canada." />
<meta property="og:url" content="https://nsrap.ca/about/community/queering-islam.php" />
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
            <h1>Queering Islam</h1>
            Note to self: there should be an audio file embedded into this page.
            <br><BR>
         <?php
            
            $text = fopen("../text/queering-islam.txt", "r") or die("The specified text could not be found.");
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
               <img class="sideimg fullwidth" src="../images/cbc-human-rights-2016.jpg">
            </div>
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
               <a href="http://www.jumacircle.com/who-we-are" class="navlink orangeb solo fullwidth"><div class="padded">Juma Circle</div></a>
               <a href="https://www.facebook.com/QueerArabsHFX/" class="navlink orangeb solo fullwidth"><div class="padded">Queer Arabs of Halifax</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>