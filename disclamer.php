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
      <div class="col s12 m5">
        <div class="card-panel teal">
          <span class="white-text">ChennaiRainsHelp.org is a social initiative to help people affected by floods caused by the heavy rains in Chennai, Tamil Nadu. The information provided in the website has been collected from social media handles, articles, forwarded messages on mobile and similar kind of unverified public resources. Also the information is crowd sourced, volunteers and users of the website are submitting information which can be relevant according to them which may be useful for the affected people. ChennaiRainsHelp.org does not hold any accountability towards the information provided in website under the "Help" section or any outcomes of it.
          </span>
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