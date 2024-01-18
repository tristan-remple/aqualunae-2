<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/desktop.css" media="screen and (min-width: 1060px)">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (max-width: 1059px)">

<title>NSRAP Calendar</title>
<meta name="title" content="NSRAP Calendar" />
<meta name="description" content="Learn about Nova Scotia rainbow community events, as well as national and international days of importance for this month." />
<meta name="robots" content="index, follow" />
<meta name="web-author" content="Tristan Remple" />

<meta property="og:site_name" content="NSRAP" />
<meta property="og:title" content="NSRAP Calendar" />
<meta property="og:description" content="Learn about Nova Scotia rainbow community events, as well as national and international days of importance for this month." />
<meta property="og:url" content="https://nsrap.ca/about/events/calendar.php" />
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
            <h1>Calendar</h1>
            Here you can find this month's local events for the rainbow community, as well as national and international days of importance.
         </div>
      </div>
      
      <div class="maincontainer calendar-box">
      
      <table class="calendar ninewide" aria-label="calendar" role="region">
        <tr class="daynames">
            <td colspan="7"><h2>July</h2></td>
        </tr>
        <tr class="daynames">
            <td>Sunday</td>
            <td>Monday</td>
            <td>Tuesday</td>
            <td>Wednesday</td>
            <td>Thursday</td>
            <td>Friday</td>
            <td>Saturday</td>
        </tr>
        <tr class="week">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr class="week">
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr class="week">
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td class="eday">
                14
                <a class="event" href="https://www.ygender.org.au/campaign/non-binary-week">
                    <img class="calicon fullwidth" src="../images/nb-flag.png">
                    <div>Non-binary People's Day</div>
                </a>
            </td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
        </tr>
        <tr class="week">
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
        </tr>
        <tr class="week">
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
        </tr>
      </table>
      </div>
    
    </div>
    
    <?php
    
    include("../text/sub-footer.html");
    
    ?>
    
</body>
</html>