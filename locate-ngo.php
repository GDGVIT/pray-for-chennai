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

      include 'navbar.php';
    include 'funcs.php';
    include 'side-bar1.php';
    echo '  

    

<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->

            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
    <br><br>
       <div class="row">
          <div class="grid-example col s12 l9 m12"><span class="flow-text">Following is the list of NGOs or individuals who are ready to help you. </span>
            </div>
            '
            ;

    showPeopleWhoAreGivingHelp();
    echo '
    </div>
    
    </div>';

        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>