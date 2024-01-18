<?php
    $user = "root";
    $pass = NULL;
    $host = "localhost";
    $dbname = "commissions";
    
$conn = new mysqli($host, $user, $pass, $dbname);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM media";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            
while($rows[] = mysqli_fetch_assoc($result));

$yearopt = array_column($rows, 'year');

$maxyears = [];
foreach ($yearopt as $key => $value) {
    array_push($maxyears, $value);
}
$years = array_unique($maxyears);

function clean($string) {
  return preg_replace('/[^A-Za-z0-9]/', '', $string);
}

if (!isset($_GET['yr'])) {
  $syear = 'empty';
} elseif (preg_match('/[^-0-9]/i', ($_GET['yr']))) {
  $syear = 'empty';
} else {
  $syear = clean($_GET['yr']);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Media Releases</title>
<meta name="title" content="NSRAP Archive" />
<meta name="description" content="NSRAP's past media releases" />
<meta name="robots" content="noindex, nofollow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Archive" />
<meta property="og:description" content="NSRAP's past media releases" />
<meta property="og:url" content="https://nsrap.ca/issues/archive/past-media.php" />
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
      
      <div class="thirdbox ninewide">
        
        <div class="onethird">
            <div class="textbox ninewide" role="navigation" aria-label="Filter Items">
                <div class="padded">
                    <h2>Filters</h2>
                <?php
                
                echo '
      <div class="optcat" tabindex="0" id="type">➢ year</div>
      <div class="optbox" id="type">';
      
      foreach ($years as $value) {
        
        if (str_contains($syear, $value) !== false) {
          $button = 'actbtn';
        } else {
          $button = 'dormbtn';
        }
        
        echo "<a href='past-media.php?";
        if ($syear !== 'empty') { echo 'yr=', $syear, $value; } else { echo 'yr=', $value; }
        echo "' id=\"", $value, "\" class=\"type sidebtn ", $button, "\"'>", $value, "</a>";
      }
      
      if ($syear == 'empty') {
        $button = 'actbtn';
      } else {
        $button = 'dormbtn';
      }
      
      echo "<a href='past-media.php?' id='anytype' class='sidebtn ", $button, "'>any year</a>";
      
      echo '</div>';
      
                
                ?>
                </div>
            </div>
         </div>
        
         <div class="twothird">
    
      <div class="textbox fullwidth" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>Media Releases</h1>
            Here you can find a list of past media releases from NSRAP. You can click on the years to the left to filter results.
         </div>
      </div>
      
      <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
        
        <?php
      
      
      $idq = "SELECT id FROM media";
        $nrow = mysqli_query($conn, $idq);
        $numrow = mysqli_num_rows($nrow);
        
        $id = $numrow;
      
      do {
      $sql = "SELECT * FROM media WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          $row = mysqli_fetch_assoc($result);
            
            $year = $row['year'];
            
            if ($syear == 'empty') {
                $show = TRUE;
            } elseif (str_contains($syear, $year) == FALSE) {
                $show = FALSE;
            } else {
                $show = TRUE;
            }
        
        if ($show == TRUE) {
            
            echo '<a class="reslink greenb" href="../../text/', $row['filename'], '"><div class="padded">
            <strong>', $row['title'], '</strong><br><BR>
            Release date: ', $row['day'], ' ', $row['year'],
        '</div></a>';
        }
        }
        $id--;
      } while ($id > 0);
      ?>
        
      </div>
      
      </div>
      </div>
    
    </div>
    
    <?php
    
    include("../../text/sub2-footer.html");
    
    ?>
    
</body>
</html>