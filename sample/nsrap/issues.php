<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" id="dispstyle" type="text/css" href="css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" id="dispstyle" type="text/css" href="css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Issues</title>
<meta name="title" content="NSRAP Issues" />
<meta name="description" content="Nova Scotia Rainbow Action Project cares about issues that matter." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Issues" />
<meta property="og:description" content="Nova Scotia Rainbow Action Project cares about issues that matter." />
<meta property="og:url" content="https://nsrap.ca/issues.php" />
<meta property="og:type" content="website" />
<meta property="og:image" content="images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    
    <?php
    
    include("text/root-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
        
        <div class="textbox ninewide">
            <div class="padded">
            <h1>Issues</h1><br>
            <?php
            
            $text = fopen("text/issues.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
            </div>
        </div>
        
        <div class="thirdbox ninewide">
            <div class="twothird">
        
                <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
    
                    <a href="issues/pinkwashing.php" class="navlink greenb incol"><div class="padded">Anti-Pinkwashing Campaign</div></a>
                    <a href="issues/gender.php" class="navlink greenb incol"><div class="padded">Gender Identity & Gender Expression</div></a>
                    <a href="issues/youth-elders.php" class="navlink greenb incol"><div class="padded">Youth & Elders Project</div></a>
                    <a href="issues/trauma-support.php" class="navlink greenb incol"><div class="padded">Trauma-Informed Care and Support</div></a>
                    <a href="issues/mens-health.php" class="navlink greenb incol"><div class="padded">Men’s Health</div></a>
                    <a href="issues/trans-health.php" class="navlink greenb incol"><div class="padded">Trans and Gender Diverse Health</div></a>
                    <a href="issues/qtbipoc-health.php" class="navlink greenb incol"><div class="padded">QTBIPOC Health</div></a>
                    <a href="issues/mental-health.php" class="navlink greenb incol"><div class="padded">Mental Health, Substance Abuse, and Addiction</div></a>
                    <a href="issues/archive.php" class="navlink greenb singlefile"><div class="padded">Archive</div></a>
            
                </div>
            
            </div>
            <div class="onethird">
                <div class="sideimgbox fullwidth">
                    <img class="sideimg fullwidth" src="images/nsrap-2015.jpg">
                </div>
            </div>
        </div>
            
    </div>
    
    <?php
    
    include("text/root-footer.html");
    
    ?>

</body>
</html>