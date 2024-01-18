<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Transgender Rights</title>
<meta name="title" content="NSRAP Transgender Rights" />
<meta name="description" content="Learn about the status of transgender rights in Nova Scotia." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Transgender Rights" />
<meta property="og:description" content="Learn about the status of transgender rights in Nova Scotia." />
<meta property="og:url" content="https://nsrap.ca/about/issues/gender.php" />
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
            <h1>Protect Gender Identity & Gender Expression</h1>
         <?php
            
            $text = fopen("../text/trans-rights.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
      
      </div>
         <div class="onethird">
            <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
               <a href="https://nslegislature.ca/legc/bills/61st_4th/3rd_read/b140.htm" class="navlink greenb solo fullwidth"><div class="padded">Bill 140</div></a>
            </div>
            <div class="sideimgbox fullwidth">
               <img class="sideimg fullwidth" src="../images/protest-2018.jpg">
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>