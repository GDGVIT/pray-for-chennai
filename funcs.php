<?php
include 'config.php';

function addNGO($name, $address, $contact, $type_of_help, $area_covered){
	 global $mysqli,$db_table_prefix;
	//$typeId is the proof that of where the transaction occurred. 
	$stmt = $mysqli->prepare("INSERT INTO addngo (
		name,
		address,
		contact,
		typeOfHelp,
		areaCovered
		)
		VALUES (
		?,
		?,
		?,
		?,
		?
		)");
	if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
         echo $mysqli->error;
          }
          else{
	$stmt->bind_param("sssss", $name, $address, $contact, $type_of_help, $area_covered);
	$stmt->execute();
	$stmt->close();

	}
}


// add Helpline...

function addHelpline($name, $description, $contact){
	 global $mysqli,$db_table_prefix;
	//$typeId is the proof that of where the transaction occurred. 
	$stmt = $mysqli->prepare("INSERT INTO helpline  (
		helplineTitle,
		description,
		helplineNumber
		)
		VALUES (
		?,
		?,
		?
		)");
	if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
         echo $mysqli->error;
          }
          else{
	$stmt->bind_param("sss", $name, $description, $contact);
	$stmt->execute();
	$stmt->close();

	}
}

	function needHelp($name, $address, $contact, $type_of_help, $location){
	 global $mysqli,$db_table_prefix;
	//$typeId is the proof that of where the transaction occurred. 
	$stmt = $mysqli->prepare("INSERT INTO needhelp  (
		name,
		address,
		contact,
		typeOfHelp,
		area
		)
		VALUES (
		?,
		?,
		?,
		?,
		?
		)");
	if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
         echo $mysqli->error;
          }
          else{
	$stmt->bind_param("sssss", $name, $address, $contact, $type_of_help, $location);
	$stmt->execute();
	$stmt->close();

	}

}

//Show need help people....

function showPeopleWhoNeedHelp()
{


	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		name,
		contact,
		address,
		area,
		typeOfHelp
        FROM needhelp
        WHERE 
        isSafe = 0
		ORDER BY id DESC
		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($name, $contact, $address, $area, $typeOfHelp);
	while ($stmt->fetch()){
		
		echo ' <div class="row">

        <div class="col s12 l9 m12">

        <div class="col s12">

          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$name.'</span>
              <p>Address: '.$address.'.</p>
              <p>Area: '.$area.'</p>
              <p>Type of help :'.$typeOfHelp.'</p>
            </div>
            <div class="card-action">
              <a href="#">Contact: '.$contact.'</a><br>
              <form action = "iAmNowSafe.php" method = "GET">
              	<input type = "hidden" name = "name" value = "'.$name.'" > 
              	<input type = "hidden" name = "contact" value = "'.$contact.'" >

              	<input type = "submit" class = "waves-effect waves-light btn" value = "Mark Safe">
              </form>
              
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

}

//Show people/ NGO who are ready to give help....

function showPeopleWhoAreGivingHelp()
{


	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		name,
		contact,
		address,
		areaCovered,
		typeOfHelp
        FROM addngo
		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($name, $contact, $address, $area, $typeOfHelp);
	while ($stmt->fetch()){
		
		echo ' <div class="row">
        <div class="col s12 l9 m12">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$name.'</span>
              <p>Address: '.$address.'.</p>
              <p>Area: '.$area.'</p>
              <p>Type of help :'.$typeOfHelp.'</p>
            </div>
            <div class="card-action">
              <a href="#">Contact: '.$contact.'</a><br>
              
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

}


// function to return number of people who need help....

function NumberOfPeopleWhoWantHelp()
{
	
	global $mysqli,$db_table_prefix; 
	$query = "SELECT * FROM needhelp";
	$stmt = $mysqli->prepare($query);
	//$stmt->bind_param($data);
	$stmt->execute();
	//$stmt->bind_result();
	$number=0;
	while ($stmt->fetch()){
		
		$number++;


			}

	return $number;
			
	$stmt->close();
}


// function to return number of people who are giving help....

function NumberOfPeopleWhoAreHelping()
{
	
	global $mysqli,$db_table_prefix; 
	$query = "SELECT * FROM addngo";
	$stmt = $mysqli->prepare($query);
	//$stmt->bind_param($data);
	$stmt->execute();
	//$stmt->bind_result();
	$number=0;
	while ($stmt->fetch()){
		
		$number++;


			}

	return $number;
			
	$stmt->close();
}



//fetch number of helpline

function NumberOfHelplineContacts()
{
	
	global $mysqli,$db_table_prefix; 
	$query = "SELECT * FROM contacts";
	$stmt = $mysqli->prepare($query);
	//$stmt->bind_param($data);
	$stmt->execute();
	//$stmt->bind_result();
	$number=0;
	while ($stmt->fetch()){
		
		$number++;


			}

	return $number;
			
	$stmt->close();
}


// Show Helpline 

function showHelpline()
{


	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		service,
		area,
		name,
		number 
		FROM
		contacts

		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($service, $area, $name, $number);
	while ($stmt->fetch()){
		
		echo ' <div class="row">
        <div class="col s12 m12 l12">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$name.'</span>
              <p>Description: '.$service.'.</p>
              <p>Area: '.$area.'</p>
             </div>
            <div class="card-action">
              <a href="#">Contact: '.$number.'</a><br>
              
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

}


// fetch helps by type of help...

function fetchHelpsByTypeOfHelp($typeOfHelp)
{

	if($typeOfHelp!='all'){
	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		name,
		address,
		contact,
		typeOfHelp,
		areaCovered
        FROM addngo
        WHERE 
        typeOfHelp = ?
		");
		$stmt->bind_param("s", $typeOfHelp);
	$stmt->execute();
	$stmt->bind_result($name, $address, $contact, $typeOfHelp, $areaCovered);
	while ($stmt->fetch()){
		
		echo ' 
        <div class="col s12 m12 l9">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$name.'</span>
              <p>Address: '.$address.'.</p>
             </div>
            <div class="card-action">
              <a href="#">Contact: '.$contact.'</a><br>
              
            </div>
          </div>
        </div>
      ';

			}


	
	$stmt->close();
		}

	else {

		global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		name,
		address,
		contact,
		typeOfHelp,
		areaCovered
        FROM addngo
		");
		//$stmt->bind_param("s", $typeOfHelp);
	$stmt->execute();
	$stmt->bind_result($name, $address, $contact, $typeOfHelp, $areaCovered);
	while ($stmt->fetch()){
		
		echo ' <div class="row">
        <div class="col s12 m12 l6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$name.'</span>
              <p>Address: '.$address.'.</p>
              <p>Type of help: '.$typeOfHelp.'.</p>
             </div>
            <div class="card-action">
              <a href="#">Contact: '.$contact.'</a><br>
              
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

	}
}


// Mark me safe

function iAmSafe($contactOfPersonWhoIsSafe)
{

	global $mysqli,$db_table_prefix;
	$stmt = $mysqli->prepare("UPDATE  needhelp
		SET 
		isSafe = 1
		WHERE
		contact = ?");
	$stmt->bind_param("s", $contactOfPersonWhoIsSafe);
	$result = $stmt->execute();
	echo ' <div class="row">
                     <div class="grid-example col s12 m12 center-align"><span class="flow-text">Congratulations. You are now marked as safe! :) </span>

            </div>
';
	$stmt->close();

}


// Insert the name of the person who is hero

function superHero($hero,$hostage){
	 global $mysqli,$db_table_prefix;
	//$typeId is the proof that of where the transaction occurred. 
	$stmt = $mysqli->prepare("INSERT INTO heros (
		hero,
		whoWasSaved
		)
		VALUES (
		?,
		?
		)");
	if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
         echo $mysqli->error;
          }
          else{
	$stmt->bind_param("ss", $hero, $hostage);
	$stmt->execute();
	$stmt->close();

	}
}


//Show need help people....

function showHeroes()
{


	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		hero,
		whoWasSaved
		FROM heros
		ORDER BY id DESC
		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($hero,$hostage);
	while ($stmt->fetch()){
		
		echo ' <div class="row">

        <div class="col s12 l9 m12">

        <div class="col s12">

          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title"><center><b>HERO : '.$hero.'</b></center></span>
              <p><center>Rescued: <i>'.$hostage.'</i></center></p>
          
            </div>
            <div class="card-action">
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

}


?>