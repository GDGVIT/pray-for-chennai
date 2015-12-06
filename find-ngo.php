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
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>


      <?php
        include 'funcs.php';
        include 'navbar.php';
        include 'side-bar1.php';
        if (isset($_GET['type_of_help'])) {
          # code...
          $typeOfHelp = $_GET['type_of_help'];
          fetchHelpsByTypeOfHelp($typeOfHelp);
        }
        else {

      ?>
    

 <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
                 <br><br>
                
                   <div class="grid-example col s12 m12 l12 center-align"><span class="flow-text">Find by type of help</span>

          </div>
          <form action = "find-ngo.php" method = "GET">
              <div class = "row">
                       <div class = "input-field col s12 m12 l12">
             <label>Help required</label><br><br>
               <select class="browser-default" name = "type_of_help">
                 <option value="" disabled selected>Choose an option</option>
                 <option value = "all">All</option>
                 <option value="Food">Food</option>
                 <option value="Evacuation">Evacuation</option>
                 <option value="Venue">Shelter</option>
                 <option value="Medical">Medical</option>
                 <option value="Other">Other</option>

               </select>
                         </div>
                       </div>
                       <center><input class="btn btn-primary"type = "submit"></center>
          </form> 
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <?php
  }
  ?>
  </html>