    <!-- 
          The Navbar for PrayForChennai
        -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
       $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown({
             inDuration: 500,
             outDuration: 525,
             constrain_width: true, // Does not change width of dropdown to that of the activator
             hover: true, // Activate on hover
             gutter: 0, // Spacing from edge
             belowOrigin: false, // Displays dropdown below the button
             // Displays dropdown with edge aligned to the left of button
           }
         );
           
       })
          
      </script>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Fire & rescue : 101</a></li>
  <li class="divider"></li>
  <li><a href="#!">Electricity : 1912</a></li>
  <li class="divider"></li>
  <li><a href="#!">District Emergency: 1077</a></li>
  <li class="divider"></li>
  <li><a href="#!">State Emergency: 1070  </a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo" style="margin-left:15px;">ReliefChennai</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="disclaimer.php">Disclaimer</a></li>
            </ul>
   
    <ul class="side-nav" id="mobile-demo" >
      <li><a href="find-ngo.php">Locate NGO/Help</a></li>
      <li><a href="help-needed.php">People(Need Help)</a></li>
      <li><a href="need-help.php">Request Help</a></li>
      <li><a href="find-ngo.php">Find NGO by Locality</a></li>
       <li><a href="livestatus.php"class="collection-item" >Live Status</a></li>
      <li><a href="add-ngo.php">Help/Volunteer</a></li>
      <li><a href="disclaimer.php">Disclaimer</a></li>
      <li><a href="news.php">Follow the news</a></li>
      <li><a href="donate.php">Donate</a></li>
      <li><a href="helpline.php">Helpline</a></li>
      <li><a href="about-us.php">About Us</a></li>      <!-- Dropdown Trigger -->
      
      <ul class="collection" style="padding:10px;">
                        <li><a class="collection-item"href="#!">Fire & rescue : <p>101</p></a></li>
                        <li class="divider"></li>
                        <li><a class="collection-item"href="#!">Electricity : <p>1912</p></a></li>
                        <li class="divider"></li>
                        <li><a class="collection-item"href="#!">District Emergency: <p>1077</p></a></li>
                        <li class="divider"></li>
                        <li><a class="collection-item"href="#!">State Emergency:<p> 1070  </p></a></li>
                  </ul>
      
    </ul>
  </div>
</nav>

