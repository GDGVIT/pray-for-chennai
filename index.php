 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


  
    <?php

    include 'navbar.php';
    include 'funcs.php';


    echo '  <br><br>
        <div class="collection">
    <a href="locate-ngo.php" class="collection-item">Locate NGO<span class="badge">'; echo NumberOfPeopleWhoAreHelping(); echo '</span></a>
    <a href="help-needed.php" class="collection-item">Help Needed<span class="badge">'; echo NumberOfPeopleWhoWantHelp(); echo '</span></a>
    <a href="need-help.php" class="collection-item">Need Help</a>
    <a href="add-ngo.php" class="collection-item">Add NGO</a>
    <a href="helpline.php" class="collection-item">Helpline</a>
  </div>
       
    
       <div class="row">
          <div class="grid-example col s12 m6"><span class="flow-text">People who need help</span>
            ';

    showPeopleWhoNeedHelp();
    echo '
          </div>
    <div class="grid-example col s12 m6"><span class="flow-text">Help Line</span>';

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