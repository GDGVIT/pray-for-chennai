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
<script type="text/javascript">
  var obj = JSON.parse('http://chennairains.org/api/rescue.json');
  myFunction(obj);

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<div class="row">
        <div class="col s12 m12 l12">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">Contact for Rescue'+$arr[i].rows[1]+'</span>
              <p>Description: 
              <ul>
              <li> Infant/Women/Children etc :'+$arr[i].rows[2]+'</li>
              <li> Area:'+$arr[i].rows[3]+'</li>
              <li>Type of Emergency(Medical / Stranded / Hungry / Flooding - Rescue / Other)'+$arr[i].rows[4]+'</li>
              <li>Severity \n(High- Verified on ground\nMed- Verified by online volunteer\nLow- Low impact/ Not verified)'+$arr[i].rows[5]+'</li>
              </ul>
               </p>
             </div>
            <div class="card-action">
              <a href="#">Time Stamp'+$arr[i].rows[0]'</a></a><br>
              
            </div>
          </div>
        </div>
      </div>';
    }
     document.getElemenbyId('#Rescue').innerHTML=out;
}
/*
// create script element
var script = document.createElement('script');
// assing src with callback name
script.src = 'http://chennairains.org/api/rescue.json';
// insert script to document and load content
document.body.appendChild(script);*/
 
</script>
    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>

    
    <?php

    include 'navbar.php';
    include 'funcs.php';
    include 'side-bar1.php';
    echo '

          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
                <br><br>
       
          <div id="#Rescue">
              </div>';

        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 