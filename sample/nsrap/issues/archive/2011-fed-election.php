<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Archive</title>
<meta name="title" content="NSRAP Archive" />
<meta name="description" content="NSRAP's interviews with 2011 federal election candidates." />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Archive" />
<meta property="og:description" content="NSRAP's interviews with 2011 federal election candidates." />
<meta property="og:url" content="https://nsrap.ca/issues/archive/2011-fed-election.php" />
<meta property="og:type" content="article" />
<meta property="og:image" content="../../images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="../../images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    
    <?php
    
    include("../../text/sub2-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
    
      <div class="textbox ninewide" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>2011 Federal Election Survey</h1>
         <?php
            
            $text = fopen("../../text/federal-election-2011.txt", "r") or die("The specified text could not be found.");
              while (!feof($text)) {
                echo fgets($text) . "<br>";
                }
              fclose($text);
              
            ?>
         </div>
      </div>
    
        <table class="calendar ninewide">
            <tr class="daynames">
                <td>Location</td>
                <td>Conservative</td>
                <td>Green</td>
                <td>Liberal</td>
                <td>NDP</td>
                <td>Other</td>
            </tr>
            <tr class="candi">
                <td><strong>Cape Breton - Canso</strong></td>
                <td>Derrick Kennedy</td>
                <td>
                    Glen Carabin<br>
                    <a class="event" href="../../text/2011-GlenCarabinGRNCapeBretonCanso.pdf">Interview</a>
                </td>
                <td>Rodger Cuzner</td>
                <td>
                    Marney Simmons<br>
                    (could not be reached)
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Central Nova</strong></td>
                <td>Peter MacKay</td>
                <td>Matthew Chisholm</td>
                <td>John Hamilton</td>
                <td>
                    David Parker<br>
                    <a class="event" href="../../text/2011-DavidParkerNDPCentralNova.pdf">Interview</a>
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Cumberland – Colchester – Musquodoboit Harbour</strong></td>
                <td>Scott Armstrong</td>
                <td>
                    Jason Blanch<br>
                    <a class="event" href="../../text/2011-JasonBlanchGRNCumberland.pdf">Interview</a>
                </td>
                <td>Jim Burrows</td>
                <td>Wendy Robinson</td>
                <td>Jim Hnatiuk (CHP)</td>
            </tr>
            <tr class="candi">
                <td><strong>Dartmouth-Cole Harbour</strong></td>
                <td>Wanda Webber</td>
                <td>Paul Shreenan</td>
                <td>Mike Savage</td>
                <td>
                    Robert Chisholm<br>
                    <a href="../../text/2011-RobertChisholmNDPDartmouthColeHarbour.pdf" class="event">Interview</a>
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Halifax</strong></td>
                <td>George Nikoloau</td>
                <td>
                    Michael Dewar<br>
                    <a href="../../text/2011-MichaelDewarGRNHalifax.pdf" class="event">Interview</a>
                </td>
                <td>Stan Kutcher</td>
                <td>
                    Megan Leslie<br>
                    <a href="../../text/2011-MeganLeslieNDPHalifax.pdf" class="event">Interview</a>
                </td>
                <td>
                    Tony Seed (ML)<br>
                    <a href="../../text/2011-TonySeedMLHalifax.pdf" class="event">Interview</a>
                </td>
            </tr>
            <tr class="candi">
                <td><strong>Halifax West</strong></td>
                <td>Bruce Pretty</td>
                <td>
                    Thomas Trappenberg<br>
                    <a href="../../text/2011-TomTrappenbergGRNHalifaxWest.pdf" class="event">Interview</a>
                </td>
                <td>
                    Geoff Regan<br>
                    <a href="../../text/2011-GeoffReganLIBHalifaxWest.pdf" class="event">Interview</a>
                </td>
                <td>Gregor Ash</td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Kings – Hants</strong></td>
                <td>David Morse</td>
                <td>
                    Sheila Richardson<br>
                    <a href="../../text/2011-SheilaRichardsonGRNKingsHants.pdf" class="event">Interview</a>
                </td>
                <td>Scott Brison</td>
                <td>
                    Mark Rogers<br>
                    <a href="../../text/2011-MarkRogersNDPKingsHants.pdf" class="event">Interview</a>
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Sackville – Eastern Shore</strong></td>
                <td>Adam Mimnagh</td>
                <td>John Percy</td>
                <td>Scott Hemming</td>
                <td>Peter Stoffer</td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>South Shore – St. Margaret’s</strong></td>
                <td>Gerald Keddy</td>
                <td>Kris MacLellan</td>
                <td>Derek Wells</td>
                <td>
                    Gordon Earle<br>
                    <a href="../../text/2011-GordonEarleNDPSouthShoreStMargarets.pdf" class="event">Interview</a>
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>Sydney – Victoria</strong></td>
                <td>Cecil Clarke</td>
                <td>
                    Chris Milburn<br>
                    (could not be reached)
                </td>
                <td>Mark Eyking</td>
                <td>
                    Kathy MacLeod<br>
                    (could not be reached)
                </td>
                <td></td>
            </tr>
            <tr class="candi">
                <td><strong>West Nova</strong></td>
                <td>
                    Greg Kerr<br>
                    <a href="../../text/2011-GregKerrCONWestNova.pdf" class="event">Interview</a>
                </td>
                <td>Ross Johnson</td>
                <td>Robert Thibault</td>
                <td>
                    George Barron<br>
                    (could not be reached)
                </td>
                <td></td>
            </tr>
        </table>
    
    
    </div>
    
    <?php
    
    include("../../text/sub2-footer.html");
    
    ?>
    
</body>
</html>