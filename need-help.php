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
    <?php
    include 'funcs.php';
    include 'navbar.php';
    ///backend code to Help/Volunteer
if (isset($_POST['name']) && isset($_POST['type_of_help']) && isset($_POST['area'])) {
  # code...

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $area_covered= $_POST['area'];
    $type_of_help = $_POST['type_of_help'];
    needHelp($_POST['name'],$_POST['address'], $_POST['contact'], $_POST['type_of_help'], $_POST['area']);
    echo ' <div class="row">
          <div class="grid-example col s12"><span class="flow-text"> Your response is recorded and would be shown in our database. We have shared your information with NGOs and they will contact you ASAP. Be safe. <a href = "index.php" >Go Back</a></span></div></div>';
        }

        else {
    ?>

   

    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>

      <div class="row">
          <br>
            <div class="col s12 m3 l3 hide-on-med-and-down navleft"> <!-- Note that "m4 l3" was added -->
              <!-- Grey navigation panel

                    This content will be:
                3-columns-wide on large screens,
                4-columns-wide on medium screens,
                12-columns-wide on small screens  -->
                 <div class="collection">
                  <a href="find-ngo.php" class="collection-item">Locate NGO/Help<span class="badge"><?php echo NumberOfPeopleWhoAreHelping(); ?></span></a>
                  <a href="help-needed.php" class="collection-item">Help Needed<span class="badge"><?php echo NumberOfPeopleWhoWantHelp(); ?></span></a>
                  <a href="need-help.php"class="collection-item" >Request Help</a>
                   
                  <a href="add-ngo.php" class="collection-item">Help/Volunteer</a>
                  <a href="donate.php"class="collection-item" >Donate</a>
                  <a href="news.php"class="collection-item" >Follow the news</a>
                 
                  <a href="helpline.php" class="collection-item">Helpline</a>
                  <a href="disclaimer.php" class="collection-item">Disclaimer</a>
                 
                  <a href="about-us.php"class="collection-item" >About Us</a>      <!-- Dropdown Trigger -->
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
          <div class="grid-example col s12"><span class="flow-text">If you need help, please fill up the form</span></div>
    
    </div>
    <div class="row">
    <form class="col s12" id = "addNGO" method = "POST" action = "need-help.php"> 
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input name = "name" placeholder="Please enter your name" id="first_name" type="text" class="validate" required>
          <label for="first_name">Name</label>
        </div>
        <div class="row">
        <div class="input-field col s12 l6 m6">
          <input name = "contact" placeholder="Please enter your Contact Number" id="first_name" type="text" class="validate" required>
          <label for="first_name">Contact</label>

        </div>
          </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea name = "address" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Address and Cause(if serious problem) </label>


        </div>
      </div>

      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input name = "area" placeholder="Please enter the area you can reach" id="first_name" type="text" class="validate" required>
          <label for="first_name">Area</label>
        </div>
        </div>
        <div class = "row">
          <div class = "input-field col s12 l6 m6">
<label>Type of help</label><br><br>
  <select class="browser-default" name = "type_of_help">
    <option value="" disabled selected>The type of help you need</option>
    <option value="Food">Food</option>
    <option value="Evacuation">Shelter</option>
    <option value="Venue">Rescue</option>
    <option value="Medical">Medical</option>
    <option value="Other">Other</option>

  </select>
            </div>
          </div>


      </div>
     <a class="waves-effect waves-light btn" id= "submitForm">Request Help</a>
    </form>
  </div>
  </div>
  </div>

        

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        document.getElementById("submitForm").onclick = function() {
    document.getElementById("addNGO").submit();
}
      </script>
    </body>
  </html>

  <?php

}
  ?>