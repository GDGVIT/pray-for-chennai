 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta charset="utf-8">
    <meta name="language" content="en-us"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Team Relief Chennai | We are a small group of people who took up an initiative to help and rescue people stuck up in floods in Chennai.
    " />
    <meta name="keywords" content="Chennai, Rains, Floods, pray for chennai, chennai rains, rescue, help, ngo, chennai support, chennai sos, chennai emergency" />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days"/>
     <meta name="copyright" content="Relief Chennai"/>
    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="google-site-verification" content="v32lxpOz3ctNMPH44Hwf8GXnFyhs-dbOXdKTLS6cztI" />
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    </head>

    <body>
<?php

include 'navbar.php';
    include 'funcs.php';
    include  'side-bar1.php';
include 'analyticstracking.php';

?>

<title>ReliefChennai-An initiative by VIT'ains</title>



    <?php

    


    echo '
    
          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
         
       
    
       <div class="row">
       <div class="grid-example col s12 l12 m12">
    <a href="http://www.accuweather.com/en/in/chennai/206671/weather-forecast/206671" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1449234306924" class="aw-widget-current"  data-locationkey="206671" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1449234306924"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
</div>
          <div class="grid-example col s12"><span class="flow-text">People who need help</span>
            ';

    showPeopleWhoNeedHelp();
    echo '
          </div>
   <!--
    <div class="grid-example col s12 m6 l6"><span class="flow-text">Help Line</span>';

    //showHelpline();
    echo '
    </div>
    -->
    </div>';


        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>