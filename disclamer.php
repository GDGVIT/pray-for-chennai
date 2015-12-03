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
    ///backend code to add NGO
if (isset($_POST['name'])) {
  # code...

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];
    addHelpline($_POST['name'],$_POST['description'], $_POST['contact']);
    echo ' <div class="row">
          <div class="grid-example col s12 l12 m12"><span class="flow-text">Thankyou for your support. Your response is recorded and would be shown in our database. <a href = "index.php" >Go Back</a></span></div></div>';
        }

        else {
    ?>

   

    <body>


  
    <div class="row">
    <br>

          <div class="col s12 m4 l3 hide-on-med-and-down navleft"> <!-- Note that "m4 l3" was added -->
            <!-- Grey navigation panel

                  This content will be:
              3-columns-wide on large screens,
              4-columns-wide on medium screens,
              12-columns-wide on small screens  -->
               <div class="collection">
                <a href="locate-ngo.php" class="collection-item">Locate NGO<span class="badge"><?php echo NumberOfPeopleWhoAreHelping(); ?></span></a>
                <a href="help-needed.php" class="collection-item">Help Needed<span class="badge"><?php echo NumberOfPeopleWhoWantHelp(); ?></span></a>
                <a href="need-help.php"class="collection-item" >Need Help</a></li>
                <a href="find-ngo.php"class="collection-item" >Find NGO by Locality</a></li>
                <a href="add-ngo.php" class="collection-item">Add NGO</a>
                <a href="donate.php"class="collection-item" >Donate</a></li>
                <a href="helpline.php" class="collection-item">Helpline</a>
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

          <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
    <br><br>
        <div class="row">
          <div class="grid-example col s12 l12 m12 center-align"><span class="flow-text">If you want to help, please fill up the form</span></div>
    
    </div>
    <div class="row">
      <div class="col s12 m5">
        <div class="card-panel teal">
          <span class="white-text">ChennaiRainsHelp.org is a social initiative to help people affected by floods caused by the heavy rains in Chennai, Tamil Nadu. The information provided in the website has been collected from social media handles, articles, forwarded messages on mobile and similar kind of unverified public resources. Also the information is crowd sourced, volunteers and users of the website are submitting information which can be relevant according to them which may be useful for the affected people. ChennaiRainsHelp.org does not hold any accountability towards the information provided in website under the "Help" section or any outcomes of it.
          </span>
        </div>
      </div>
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