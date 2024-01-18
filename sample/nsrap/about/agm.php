<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP AGM</title>
<meta name="title" content="NSRAP AGM" />
<meta name="description" content="Information about the Annual General Meeting of the Nova Scotia Rainbow Action Project." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP AGM" />
<meta property="og:description" content="Information about the Annual General Meeting of the Nova Scotia Rainbow Action Project." />
<meta property="og:url" content="https://nsrap.ca/about/agm.php" />
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
    
      <div class="textbox ninewide" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>Annual General Meeting</h1>
         <?php
            
            $text = fopen("../text/agm.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
            <br>
            I am still waiting for text about the Annual General Meeting 2021.
         </div>
      </div>
      
      <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
         <a href="../issues/archive/past-agm.php" class="navlink redb incol solo"><div class="padded">Past Meetings</div></a>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>