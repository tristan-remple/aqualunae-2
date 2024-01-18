<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 1059px)">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
    
   $(".frontupdate").click(function() {
        var current = $(this).attr('id');
        $(".updatetext#"+current).toggle();
        
   });
   
   $(".frontupdate").keypress(function(event) { 
      if (event.keyCode === 13 || 36) { 
         var current = $(this).attr('id');
         $(".updatetext#"+current).toggle(); 
      } 
   });
   
});

</script>

<title>NSRAP</title>
<meta name="title" content="NSRAP" />
<meta name="description" content="Nova Scotia Rainbow Action Project: Equality for All" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP" />
<meta property="og:description" content="Nova Scotia Rainbow Action Project: Equality for All" />
<meta property="og:url" content="https://nsrap.ca/index.php" />
<meta property="og:type" content="website" />
<meta property="og:image" content="images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />
    
</head>
<body>
    <?php
    
    include("text/root-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
        
      <div aria-label="updates" class="updates">
        
        <div class="textbox ninewide frontupdate" id="update-one" tabindex="0">
            <div class="padded">
               <h1>Call for Artists</h1>
                <div class="updatetext" id="update-one">
                    <?php
                    
                    $text = fopen("text/artists-2021.txt", "r") or die("The specified text could not be found.");
                      while (!feof($text)) {
                        echo fgets($text) . "<br>";
                        }
                      fclose($text);
                      
                    ?>
                </div>
            </div>
        </div>
        
        <div class="textbox ninewide frontupdate" id="update-two" tabindex="0">
            <div class="padded">
                <h1>Open Letter to the Halifax Public Libraries</h1>
                <div class="updatetext" id="update-two">
                    We have written an open letter to the Halifax Public Libraries about their decision to include "Irreversible Damage" in their collection.
                    <br><br>
                    <a href="issues/library-letter.php">You can read it here.</a>
                </div>
            </div>
        </div>
        
      </div>
        
        <div class="thirdbox ninewide">
            <div class="twothird">
            <div class="textbox fullwidth" tabindex="0" aria-label="About NSRAP">
            <div class="padded">
            <h1>About NSRAP</h1>
            <br>
            <h2>Mission</h2>
            <br>
            The Nova Scotia Rainbow Action Project (NSRAP) seeks equity, justice, and human rights for 2SLGBTQIA+ people in Nova Scotia. NSRAP seeks to create change in our communities and our society at large so that all 2SLGBTQIA+ people are included, valued, and celebrated. We will achieve this through building community and developing strong networks outside of the community in addition to public outreach, education, and political action.
            <br>
            <h2>History</h2>
            <br>
            Since 1995, NSRAP has strived to provide a coherent voice for gay, lesbian, bisexual, two-spirit, trans, and queer people – a group we refer to as the ‘Rainbow Community’ – throughout Nova Scotia.
            <Br><br>
            In 2020, NSRAP celebrated 25 years of service to Nova Scotia’s Two-Spirited, Lesbian, Gay, Bisexual, Trans, Intersex, Asexual & Aromantic, Intersex, and beyond (2SLGBTQIA+) Community. NSRAP has been working across Nova Scotia as a voice for our right to legal and social equity. For nearly 20 years NSRAP has been a strong advocate for the rights of our community.  NSRAP played a key role in the Halifax Rainbow Health Project and continues to work on trans health issues, including provincial funding of gender confirming surgeries, and the rights of 2SLGBTQIA+ elders in long term care. NSRAP has participated in numerous human rights cases involving same-sex rights, and was instrumental in bringing marriage equality to Nova Scotians.
            <BR>
            <h2>Governance</h2>
            <br>
            NSRAP is governed by a volunteer Board of Directors and most of our work is done through our volunteer committees. As a registered non-profit, we are guided by our by-laws.
            </div>
        </div>
            </div>
            <div class="onethird">
                <div class="sideimgbox fullwidth">
                    <img class="sideimg fullwidth" src="images/protest-2018-crop.jpg">
                </div>
            </div>
        </div>
    </div>
    
    <?php
    
    include("text/root-footer.html");
    
    ?>
    
</body>
</html>