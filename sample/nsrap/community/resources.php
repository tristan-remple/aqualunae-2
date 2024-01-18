<?php

include("../db.php");

$sql = "SELECT * FROM example_resource";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            
while($rows[] = mysqli_fetch_assoc($result));

$typeopt = array_column($rows, 'type');
$demoopt = array_column($rows, 'community demographic');
$ageopt = array_column($rows, 'age demographic');
$specopt = array_column($rows, 'special/emergency');

$maxtypes = [];
foreach ($typeopt as $key => $value) {
  if (str_contains($value, ', ')) {
    $newtypes = explode(', ', $value);
    foreach ($newtypes as $key => $value) {
      array_push($maxtypes, $value);
    }
  } elseif ($value !== '') {
    array_push($maxtypes, $value);
  }
}
$types = array_unique($maxtypes);

$maxdemos = [];
foreach ($demoopt as $key => $value) {
  if (str_contains($value, ', ')) {
    $newdemos = explode(', ', $value);
    foreach ($newdemos as $key => $value) {
      array_push($maxdemos, $value);
    }
  } elseif ($value !== '') {
    array_push($maxdemos, $value);
  }
}
$demos = array_unique($maxdemos);

$maxages = [];
foreach ($ageopt as $key => $value) {
  if (str_contains($value, ', ')) {
    $newages = explode(', ', $value);
    foreach ($newages as $key => $value) {
      array_push($maxages, $value);
    }
  } elseif ($value !== '') {
    array_push($maxages, $value);
  }
}
$ages = array_unique($maxages);

$maxspecs = [];
foreach ($specopt as $key => $value) {
  if (str_contains($value, ', ')) {
    $newspecs = explode(', ', $value);
    foreach ($newspecs as $key => $value) {
      array_push($maxspecs, $value);
    }
  } elseif ($value !== '') {
    array_push($maxspecs, $value);
  }
}
$specs = array_unique($maxspecs);

function clean($string) {
  return preg_replace('/[^A-Za-z0-9]/', '', $string);
}

if (!$_GET) {
  $stype = 'empty';
  $sdemo = 'empty';
  $sage = 'empty';
  $sspec = 'empty';
  $showall = 'yes';
} else {
  
  $showall = 'no';

if (!isset($_GET['type'])) {
  $stype = 'empty';
} elseif (preg_match('/[^-a-z]/i', ($_GET['type']))) {
  $stype = 'empty';
} else {
  $stype = clean($_GET['type']);
}

if (!isset($_GET['cd'])) {
  $sdemo = 'empty';
} elseif (preg_match('/[^-a-z]/i', ($_GET['cd']))) {
  $sdemo = 'empty';
} else {
  $sdemo = clean($_GET['cd']);
}

if (!isset($_GET['sage'])) {
  $sage = 'empty';
} elseif (preg_match('/[^-a-z]/i', ($_GET['sage']))) {
  $sage = 'empty';
} else {
  $sage = clean($_GET['sage']);
}

if (!isset($_GET['sspec'])) {
  $sspec = 'empty';
} elseif (preg_match('/[^-a-z]/i', ($_GET['sspec']))) {
  $sspec = 'empty';
} else {
  $sspec = clean($_GET['sspec']);
}

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Resources</title>
<meta name="title" content="NSRAP Resources" />
<meta name="description" content="Resources for the Rainbow Community" />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Resources" />
<meta property="og:description" content="Resources for the Rainbow Community" />
<meta property="og:url" content="https://nsrap.ca/about/community/resources.php" />
<meta property="og:type" content="website" />
<meta property="og:image" content="../images/titlecard.png" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="1100" />
<meta property="twitter:image" content="../images/titlecard.png" />
<meta property="twitter:site" content="@NSRAP" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
$(document).ready(function() {

$('.optcat').click(function(e){
    e.preventDefault();
    var category = $(this).attr('id');
    $('#'+category+'.collapse').toggleClass('collapsed');

    $(this).text(newtext);
});

$(".optcat").keypress(function(event) { 
          if (event.keyCode === 13 || 36) {
            var category = $(this).attr('id');
            $(".optcat#"+category).click(); 
          } 
      });

});

</script>
    
</head>
<body>
    
    <?php
    
    include("../text/sub-header.html");
    
    ?>
    
    <div class="maincontainer" id="main" role="main">
      
      <div class="thirdbox ninewide">
        
        <div class="onethird">
            <div class="textbox ninewide" role="navigation" aria-label="Filter Items">
                <div class="padded">
                    <h2>Filters</h2>
                <?php
                
                echo '
      <div class="optcat" tabindex="0" id="type">➢ resource type</div>
      <div class="optbox collapse collapsed" id="type">';
      
      foreach ($types as $value) {
        
        $shortvalue = (str_replace(' ', '', strtolower($value)));
        
        if (str_contains($stype, $shortvalue) !== false) {
          $button = 'actbtn';
        } else {
          $button = 'dormbtn';
        }
        
        echo "<a href='resources.php?";
        if ($stype !== 'empty') { echo '&type=', $stype, $shortvalue; } else { echo '&type=', $shortvalue; }
        if ($sdemo !== 'empty') { echo '&cd=', $sdemo; }
        if ($sage !== 'empty') { echo '&age=', $sage; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
        echo "' id=\"", $shortvalue, "\" class=\"type sidebtn ", $button, "\"'>", $value, "</a>";
      }
      
      if ($stype == 'empty') {
        $button = 'actbtn';
      } else {
        $button = 'dormbtn';
      }
      
      echo "<a href='resources.php?v=";
        if ($sdemo !== 'empty') { echo '&cd=', $sdemo; }
        if ($sage !== 'empty') { echo '&age=', $sage; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
      echo "' id='anytype' class='sidebtn ", $button, "'>any type</a>";
      
      echo '</div>';
      
      echo '
      <div class="optcat" tabindex="0" id="demo">➢ demographic</div>
      <div class="optbox collapse collapsed" id="demo">';
      
      foreach ($demos as $value) {
        
        $shortvalue = (str_replace(' ', '', strtolower($value)));
        
        if (str_contains($sdemo, $shortvalue) !== false) {
          $button = 'actbtn';
        } else {
          $button = 'dormbtn';
        }
        
        echo "<a href='resources.php?";
        if ($stype !== 'empty') { echo '&type=', $stype; }
        if ($sdemo !== 'empty') { echo '&cd=', $sdemo, $shortvalue; } else { echo '&cd=', $shortvalue; }
        if ($sage !== 'empty') { echo '&age=', $sage; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
        echo "' id=\"", $shortvalue, "\" class=\"type sidebtn ", $button, "\"'>", $value, "</a>";
      }
      
      if ($sdemo == 'empty') {
        $button = 'actbtn';
      } else {
        $button = 'dormbtn';
      }
      
      echo "<a href='resources.php?v=";
        if ($stype !== 'empty') { echo '&cd=', $stype; }
        if ($sage !== 'empty') { echo '&age=', $sage; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
      echo "' id='anydemo' class='sidebtn ", $button, "'>any demographic</a>";
      
      echo '</div>';
      
      echo '
      <div class="optcat" tabindex="0" id="age">➢ age group</div>
      <div class="optbox collapse collapsed" id="age">';
      
      foreach ($ages as $value) {
        
        $shortvalue = (str_replace(' ', '', strtolower($value)));
        
        if (str_contains($sage, $shortvalue) !== false) {
          $button = 'actbtn';
        } else {
          $button = 'dormbtn';
        }
        
        echo "<a href='resources.php?";
        if ($stype !== 'empty') { echo '&type=', $stype; }
        if ($sdemo !== 'empty') { echo '&cd=', $sdemo; } 
        if ($sage !== 'empty') { echo '&age=', $sage, $shortvalue; } else { echo '&age=', $shortvalue; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
        echo "' id=\"", $shortvalue, "\" class=\"type sidebtn ", $button, "\"'>", $value, "</a>";
      }
      
      if ($sdemo == 'empty') {
        $button = 'actbtn';
      } else {
        $button = 'dormbtn';
      }
      
      echo "<a href='resources.php?v=";
        if ($stype !== 'empty') { echo '&cd=', $stype; }
        if ($sdemo !== 'empty') { echo '&age=', $sdemo; }
        if ($sspec !== 'empty') { echo '&spec=', $sspec; }
      echo "' id='anyage' class='sidebtn ", $button, "'>any age group</a>";
      
      echo '</div>';
      
       echo '
      <div class="optcat" tabindex="0" id="spec">➢ special conditions</div>
      <div class="optbox collapse collapsed" id="spec">';
      
      foreach ($specs as $value) {
        
        $shortvalue = (str_replace(' ', '', strtolower($value)));
        
        if (str_contains($sspec, $shortvalue) !== false) {
          $button = 'actbtn';
        } else {
          $button = 'dormbtn';
        }
        
        echo "<a href='resources.php?";
        if ($stype !== 'empty') { echo '&type=', $stype; }
        if ($sdemo !== 'empty') { echo '&cd=', $sdemo; } 
        if ($sage !== 'empty') { echo '&age=', $sage; } 
        if ($sspec !== 'empty') { echo '&spec=', $sspec, $shortvalue; } else { echo '&spec=', $shortvalue; }
        echo "' id=\"", $shortvalue, "\" class=\"type sidebtn ", $button, "\"'>", $value, "</a>";
      }
      
      if ($sspec == 'empty') {
        $button = 'actbtn';
      } else {
        $button = 'dormbtn';
      }
      
      echo "<a href='resources.php?v=";
        if ($stype !== 'empty') { echo '&cd=', $stype; }
        if ($sdemo !== 'empty') { echo '&age=', $sdemo; }
        if ($sage !== 'empty') { echo '&spec=', $sage; }
      echo "' id='anyage' class='sidebtn ", $button, "'>any circumstance</a>";
      
      echo '</div>';
      
      echo "<br><a href='resources.php' id='alldocs' class='sidebtn ", $button, "'>all resources</a>"
                
                ?>
                </div>
            </div>
         </div>
        
         <div class="twothird">
    
      <div class="textbox fullwidth" tabindex="0" aria-label="main text">
         <div class="padded">
            <h1>Resources</h1>
            Here you can find a database of resources meant to help the rainbow community and our allies. Click on the tags to the left to filter results.
         </div>
      </div>
      
      <div class="linkcase fullwidth" role="navigation" aria-label="sub-navigation">
        
        <?php
      
      $sql = "SELECT * FROM example_resource";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            
          while($row = mysqli_fetch_assoc($result)) {
            
            if ($row['type'] !== '') {
        $typearray = $row['type'];
        if (str_contains($typearray, ',')) {
        $newtypes = explode(', ', $typearray);
        foreach ($newtypes as $key => $value) {
        if ($stype !== "empty") {
          if (str_contains($stype, $value) == false) {
            $showtype = FALSE;
          } else {
            $showtype = TRUE;
            break;
          }
        } else {
          $showtype = TRUE;
        }
        }
        } else {
          if ($stype !== "empty") {
          if (str_contains($stype, $typearray) == false) {
            $showtype = FALSE;
          } else {
            $showtype = TRUE;
          }
        } else {
          $showtype = TRUE;
        }
        }
        } else {
          if ($stype !== "empty") {
            $showtype = FALSE;
          } else {
            $showtype = TRUE;
          }
        }
        
        if ($row['community demographic'] !== '') {
        $demoarray = $row['community demographic'];
        if (str_contains($demoarray, ',')) {
        $newdemos = explode(', ', $demoarray);
        foreach ($newdemos as $key => $value) {
        if ($sdemo !== "empty") {
          if (str_contains($sdemo, $value) == false) {
            $showdemo = FALSE;
          } else {
            $showdemo = TRUE;
            break;
          }
        } else {
          $showdemo = TRUE;
        }
        }
        } else {
          if ($sdemo !== "empty") {
          if (str_contains($sdemo, $demoarray) == false) {
            $showdemo = FALSE;
          } else {
            $showdemo = TRUE;
          }
        } else {
          $showdemo = TRUE;
        }
        }
        } else {
          if ($sdemo !== "empty") {
            $showdemo = FALSE;
          } else {
            $showdemo = TRUE;
          }
        }
        
        if ($row['age demographic'] !== '') {
        $agearray = $row['age demographic'];
        if (str_contains($agearray, ',')) {
        $newages = explode(', ', $agearray);
        foreach ($newages as $key => $value) {
        if ($sage !== "empty") {
          if (str_contains($sage, $value) == false) {
            $showage = FALSE;
          } else {
            $showage = TRUE;
            break;
          }
        } else {
          $showage = TRUE;
        }
        }
        } else {
          if ($sage !== "empty") {
          if (str_contains($sage, $agearray) == false) {
            $showage = FALSE;
          } else {
            $showage = TRUE;
          }
        } else {
          $showage = TRUE;
        }
        }
        } else {
          if ($sage !== "empty") {
            $showage = FALSE;
          } else {
            $showage = TRUE;
          }
        }
        
        if ($row['special/emergency'] !== '') {
        $specarray = $row['special/emergency'];
        if (str_contains($specarray, ',')) {
        $newspecs = explode(', ', $specarray);
        foreach ($newspecs as $key => $value) {
        if ($sspec !== "empty") {
          if (str_contains($sspec, $value) == false) {
            $showspec = FALSE;
          } else {
            $showspec = TRUE;
            break;
          }
        } else {
          $showspec = TRUE;
        }
        }
        } else {
          if ($sspec !== "empty") {
          if (str_contains($sspec, $specarray) == false) {
            $showspec = FALSE;
          } else {
            $showspec = TRUE;
          }
        } else {
          $showspec = TRUE;
        }
        }
        } else {
          if ($sspec !== "empty") {
            $showspec = FALSE;
          } else {
            $showspec = TRUE;
          }
        }
        
        if (($showtype == TRUE) && ($showdemo == TRUE) && ($showage == TRUE) && ($showspec == TRUE)) {
            
            echo '<a class="reslink orangeb" href="resources/', $row['page url'], '.php"><div class="padded">
            <b>', $row['title'], '</b><br><BR>',
            $row['short description'],
            '<br><br>
            <div class="tags">
            Tags: ';
              if ($row['type'] !== '') {
                echo $row['type'], ', ';
              }
              if ($row['community demographic'] !== '') {
                echo $row['community demographic'], ', ';
              }
              if ($row['age demographic'] !== '') {
                echo $row['age demographic'], ', ';
              }
              if ($row['special/emergency'] !== '') {
                echo $row['special/emergency'];
              }
            echo '</div></div></a>';
        }
          }
        }
      ?>
        
      </div>
      
      </div>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>