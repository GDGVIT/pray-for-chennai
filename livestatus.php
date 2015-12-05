
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

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
       <object data=http://osm-in.github.io/flood-map/chennai.html#11/12.8251/79.9297 class="col s12 m12 l12" style="min-height:800px"> <embed src=http://osm-in.github.io/flood-map/chennai.html#11/12.8251/79.9297 class="col s12 m12 l12" style="min-height:800px;> </embed> Error: Embedded data could not be displayed. </object>
';


        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 