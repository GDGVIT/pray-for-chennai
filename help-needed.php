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
    echo '  
    <br>
    <div class="row">

          <div class="col s12 m4 l3 hide-on-med-and-down navleft"> <!-- Note that "m4 l3" was added -->
            <!-- Grey navigation panel

                  This content will be:
              3-columns-wide on large screens,
              4-columns-wide on medium screens,
              12-columns-wide on small screens  -->
               <div class="collection">
                <a href="find-ngo.php" class="collection-item">Locate NGO<span class="badge">'; echo NumberOfPeopleWhoAreHelping(); echo '</span></a>
                <a href="help-needed.php" class="collection-item">Help Needed<span class="badge">'; echo NumberOfPeopleWhoWantHelp(); echo '</span></a>
                <a href="need-help.php"class="collection-item" >Request Help</a></li>
                 
                <a href="add-ngo.php" class="collection-item">Help/Voulenteer</a>
                <a href="donate.php"class="collection-item" >Donate</a></li>
               
                  <a href="helpline.php" class="collection-item">Helpline</a>
                  <a href="disclaimer.php" class="collection-item">Disclaimer</a>
                <a href="about-us.php"class="collection-item" >About Us</a></li>      <!-- Dropdown Trigger -->
                <a  class="collection-item" data-beloworigin="true" href="#!" ><span>Emergency<i class="material-icons right">arrow_drop_down</i></span></a>
                <ul>
                        <li><a href="#!">Fire & rescue : <p>101</p></a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Electricity : <p>1912</p></a></li>
                        <li class="divider"></li>
                        <li><a href="#!">District Emergency: <p>1077</p></a></li>
                        <li class="divider"></li>
                        <li><a href="#!">State Emergency:<p> 1070  </p></a></li>
                  </ul>
              </div>


          </div>

          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
    <br><br>
       <div class="row">
          <div class="grid-example col s12"><span class="flow-text">Following people need your help. </span>
            </div></div>
            </div>
            </div>'
            ;

    showPeopleWhoNeedHelp();
    echo '
    </div>
    
    </div>';


        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 