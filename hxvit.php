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
    $description = $_POST['description'];
    addHelpline($_POST['name'],$_POST['description'], $_POST['contact']);
    echo ' <div class="row">
          <div class="grid-example col s12"><span class="flow-text">Thankyou for your support. Your response is recorded and would be shown in our database. <a href = "index.php" >Go Back</a></span></div></div>';
        }

        else {
    ?>

   

    <body>


  

    <br><br>
        <div class="row">
          <div class="grid-example col s12"><span class="flow-text">If you want to help, please fill up the form</span></div>
    
    </div>
    <div class="row">
    <form class="col s12" id = "addNGO" method = "POST" action = "hxvit.php"> 
      <div class="row">
        <div class="input-field col s6">
          <input name = "name" placeholder="Please enter your name or NGO name" id="first_name" type="text" class="validate" required>
          <label for="first_name">HelpLine Title</label>
        </div>
        <div class="row">
        <div class="input-field col s6">
          <input name = "contact" placeholder="Please enter your Contact Number" id="first_name" type="text" class="validate" required>
          <label for="first_name">Contact</label>

        </div>
          </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea name = "description" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Description</label>


        </div>
      </div>


      </div>
     <a class="waves-effect waves-light btn" id= "submitForm">Submit</a>
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