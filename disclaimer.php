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
    <?php
    include 'funcs.php';
    include 'navbar.php';
    ///backend code to Help/Volunteer

    ?>

   

    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>


  
    <div class="row">
    <br>

          <div class="col s12 m4 l3 hide-on-med-and-down navleft"> <!-- Note that "m4 l3" was added -->
            <!-- Grey navigation panel

                  This content will be:
              3-columns-wide on large screens,
              4-columns-wide on medium screens,
              12-columns-wide on small screens  -->
               <div class="collection">
                <a href="find-ngo.php" class="collection-item">Locate NGO/Help<span class="badge"><?php echo NumberOfPeopleWhoAreHelping(); ?></span></a>
                <a href="help-needed.php" class="collection-item">Help Needed<span class="badge"><?php echo NumberOfPeopleWhoWantHelp(); ?></span></a>
                <a href="need-help.php"class="collection-item" >Request Help</a>
                  <a href="livestatus.php"class="collection-item" >Live Status</a>
                  <a href="safe.php" class="collection-item">Find Safe Place</a>
                <a href="add-ngo.php" class="collection-item">Help/Volunteer</a>
                <a href="donate.php"class="collection-item" >Donate</a>
                <a href="news.php"class="collection-item" >Follow the news</a>
               
                  <a href="helpline.php" class="collection-item">Helpline</a>     <!-- Dropdown Trigger -->
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
          <div class="grid-example col s12 l12 m12 center-align"><span class="flow-text"><center>DISCLAIMER</center></span></div>
    
    </div>
    <div class="row">
      <div class="col s12 m12">
        <div class="card-panel teal">
          <span class="white-text">www.reliefchennai.com is a social initiative to help people affected by floods caused by the heavy rains in Chennai, Tamil Nadu. The information provided in the website has been collected from social media handles, articles, forwarded messages on mobile and similar kind of unverified public resources. Also the information is crowd sourced, volunteers and users of the website are submitting information which can be relevant according to them which may be useful for the affected people. reliefchennai.com does not hold any accountability towards the information provided in website under the "Help" section or any outcomes of it.
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
