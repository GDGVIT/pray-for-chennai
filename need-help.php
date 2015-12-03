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
    <?php
    include 'funcs.php';
    include 'navbar.php';
    ///backend code to add NGO
if (isset($_POST['name'])) {
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


  

    <br><br>
        <div class="row">
          <div class="grid-example col s12"><span class="flow-text">If you need help, please fill up the form</span></div>
    
    </div>
    <div class="row">
    <form class="col s12" id = "addNGO" method = "POST" action = "need-help.php"> 
      <div class="row">
        <div class="input-field col s6">
          <input name = "name" placeholder="Please enter your name" id="first_name" type="text" class="validate" required>
          <label for="first_name">Name</label>
        </div>
        <div class="row">
        <div class="input-field col s6">
          <input name = "contact" placeholder="Please enter your Contact Number" id="first_name" type="text" class="validate" required>
          <label for="first_name">Contact</label>

        </div>
          </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea name = "address" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Location you need help</label>


        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input name = "area" placeholder="Please enter the area you can reach" id="first_name" type="text" class="validate" required>
          <label for="first_name">Area</label>
        </div>
        </div>
        <div class = "row">
          <div class = "input-field col s6">
<label>Type of help</label><br><br>
  <select class="browser-default" name = "type_of_help">
    <option value="" disabled selected>Please choose the type of help you need</option>
    <option value="food">Food</option>
    <option value="evacuation">Shelter</option>
    <option value="venue">Rescue</option>
    <option value="medical">Medical</option>
    <option value="other">Other</option>

  </select>
            </div>
          </div>


      </div>
     <a class="waves-effect waves-light btn" id= "submitForm">Request Help</a>
    </form>
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