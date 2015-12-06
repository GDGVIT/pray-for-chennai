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
    <meta name="publisher" content="Anurag Tiwari, Ashwini Purothi, Rishi Raj, Vignesh, Thiyagaraj" />
    <meta name="copyright" content="Relief Chennai"/>
    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>

    
    <?php

    include 'navbar.php';
    include 'funcs.php';
    include 'side-bar1.php';
    echo '

          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
                <br><br>
       <div class="row">
          <div class="grid-example col s12"><span class="flow-text"><center>THE REAL HEROES</center> </span>
            </div>
            </div>';

    showHeroes();
    echo '
    </div>
    
    </div>';


        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 