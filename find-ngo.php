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
        include 'funcs.php';
        include 'navbar.php';
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
                <div class="row">
                   <div class="grid-example col s12 m12 center-align"><span class="flow-text">Find by type of help</span>

          </div>
          <form action = "find-ngo.php" method = "GET">
              <div class = "row">
                       <div class = "input-field col s12">
             <label>Type of help</label><br><br>
               <select class="browser-default" name = "type_of_help">
                 <option value="" disabled selected>Choose an option</option>
                 <option value = "all">All</option>
                 <option value="Food">Food</option>
                 <option value="Evacuation">Evacuation</option>
                 <option value="Venue">Venue</option>
                 <option value="Medical">Medical</option>
                 <option value="Other">Other</option>

               </select>
                         </div>
                       </div>
                       <center><input type = "submit"></center>
          </form> 
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <?php
  }
  ?>
  </html>