<?php

include("../db.php");

?>
<html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css">

<title>NSRAP Bylaws</title>
<meta name="title" content="NSRAP Bylaws" />
<meta name="description" content="Learn about the bylaws that guide the Nova Scotia Rainbow Action Project." />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Lan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Bylaws" />
<meta property="og:description" content="Learn about the bylaws that guide the Nova Scotia Rainbow Action Project." />
<meta property="og:url" content="https://nsrap.ca/about/bylaws.php" />
<meta property="og:type" content="website" />
<meta property="og:image" content="../images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="../images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    
    <div class="banner">
        <img class="logo" src="../images/ns-logo-new-2.png">
        <div class="titlebox">
            <a href="../index.php" class="mtitle">•N•S•R•A•P•</a>
            <div class="subtitle">Nova Scotia Rainbow Action Project<br>
            Equality for All</div>
        </div>
    </div>
    <div class="navigation">
        <a href="../about.php" class="toplink red">About NSRAP</a>
        <a href="../community.php" class="toplink orange">Community</a>
        <a href="../events.php" class="toplink yellow">Events</a>
        <a href="../issues.php" class="toplink green">Issues</a>
        <a href="../get-involved.php" class="toplink blue">Get Involved</a>
        <a href="../contact.php" class="toplink purple">Contact Us</a>
    </div>
    
    <div class="maincontainer">
    
      <div class="textbox ninewide">
         <div class="padded">
            <h1>Bylaws</h1>
            I have not yet received the text that goes on this page. I am using the Board of Directors text as a placeholder.
            <br><br>
         <?php
            
            $text = fopen("../text/board-about.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
    
    </div>
    
    <a class="escape" href="https://www.google.ca/"><img class="escimg" src="../images/escape-brown.png" alt="escape" title="Escape to Google"></a>
    
    <div class="footer">
        <div class="socmedbox">
            <a href="https://www.facebook.com/nsrap" class="soclink"><img class="socmed" src="../images/3-facebook.png" alt="Facebook" title="Facebook"></a>
            <a href="https://www.instagram.com/n.s.r.a.p/" class="soclink"><img class="socmed" src="../images/2-insta.png" alt="Instagram" title="Instagram"></a>
            <a href="https://twitter.com/NSRAP" class="soclink"><img class="socmed" src="../images/1-twitter.png" alt="Twitter" title="Twitter"></a>
        </div>
        <div class="footbox">
            <a href="../get-involved.php" class="footlink">Get Involved</a>
            <a href="../contact.php" class="footlink">Contact Us</a>
        </div>
        <div class="escpad"></div>
    </div>
    
</body>
</html>