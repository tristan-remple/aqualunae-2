<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Mental Health</title>
<meta name="title" content="NSRAP Mental Health" />
<meta name="description" content="Learn about mental health, substance abuse, and addiction in the rainbow community." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Mental Health" />
<meta property="og:description" content="Learn about mental health, substance abuse, and addiction in the rainbow community." />
<meta property="og:url" content="https://nsrap.ca/about/issues/mental-health.php" />
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
            <h1>Mental Health, Substance Abuse, and Addiction</h1>
            I have not yet received the text or links for this page. Therefore, I am using the info from the trans health page as a placeholder.
            <br><br>
         <?php
            
            $text = fopen("../text/trans-health.txt", "r") or die("The specified text could not be found.");
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
               <a href="../text/srs-forum.pdf" class="navlink greenb solo fullwidth"><div class="padded">SRS Forum Report</div></a>
               <a href="http://www.nshealth.ca/service-details/prideHealth" class="navlink greenb solo fullwidth"><div class="padded">Pride Health</div></a>
               <a href="http://southhousehalifax.ca/" class="navlink greenb solo fullwidth"><div class="padded">South House</div></a>
               <a href="https://www.facebook.com/transform.healthcare/" class="navlink greenb solo fullwidth"><div class="padded">Transform Healthcare</div></a>
               <a href="https://novascotia.ca/dhw/gender-affirming-surgery/" class="navlink greenb solo fullwidth"><div class="padded">Department of Health</div></a>
               <a href="../text/srs-press-release-2014.pdf" class="navlink greenb solo fullwidth"><div class="padded">Our Press Release</div></a>
               <a href="../text/srs-funding.pdf" class="navlink greenb solo fullwidth"><div class="padded">Department of Health Funding</div></a>
               <a href="../text/srs-clarification.pdf" class="navlink greenb solo fullwidth"><div class="padded">Our Clarification on SRS</div></a>
               <a href="https://www.wpath.org/" class="navlink greenb solo fullwidth"><div class="padded">WPATH</div></a>
               <a href="../text/srs-approval-request-form.pdf" class="navlink greenb solo fullwidth"><div class="padded">SRS Approval Rquest Form</div></a>
            </div>
         </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>