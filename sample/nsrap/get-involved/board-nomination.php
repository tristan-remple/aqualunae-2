<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Board Nominations</title>
<meta name="title" content="NSRAP Board Nominations" />
<meta name="description" content="Nominate someone or yourself for NSRAP's Board of Directors" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Board Nominations" />
<meta property="og:description" content="Nominate someone or yourself for NSRAP's Board of Directors" />
<meta property="og:url" content="https://nsrap.ca/about/get-involved/board-nominations.php" />
<meta property="og:type" content="website" />
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
            <h1>Board Nominations</h1>
            <?php
            
            $text = fopen("../text/board-nominations.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>

        <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
            <a href="membership.php" class="navlink blueb"><div class="padded">Become a NSRAP Member</div></a>
            <a href="mailto:nsrap@nsrap.ca" class="navlink blueb solo"><div class="padded">Email Us</div></a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdJXBM7X10yZdmyXvRxaM6fgSAGj673mNBghCLv32J4skyscw/viewform" class="navlink blueb solo"><div class="padded">Apply for the Board</div></a>
        </div>
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>