<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Allyship</title>
<meta name="title" content="NSRAP Allyship" />
<meta name="description" content="Learn how to be a year-round ally to the rainbow community with NSRAP." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Allyship" />
<meta property="og:description" content="Learn how to be a year-round ally to the rainbow community with NSRAP." />
<meta property="og:url" content="https://nsrap.ca/about/get-involved/year-round.php" />
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
            <h1>Year-Round Allyship</h1>
            I do not have the text for this page. Therefore, I have included the membership text and links as a placeholder.
            <br><BR>
            <?php
            
            $text = fopen("../text/membership.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>

        <div class="linkcase ninewide" role="navigation" aria-label="sub-navigation">
            <a href="https://docs.google.com/forms/" class="navlink blueb solo fullwidth"><div class="padded">Join us</div></a>
            <a href="../text/NSRAP2016-2018MembershipForm.pdf" class="navlink blueb solo fullwidth"><div class="padded">Paper Form (PDF)</div></a>
        </div>
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>