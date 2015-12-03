<?php
include 'config.php';

function addNGO($name, $address, $contact, $type_of_help, $area_covered){
	 global $mysqli,$db_table_prefix;
	//$typeId is the proof that of where the transaction occurred. 
	$stmt = $mysqli->prepare("INSERT INTO ADDNGO  (
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
        FROM needHelp
		ORDER BY id DESC
		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($name, $contact, $address, $area, $typeOfHelp);
	while ($stmt->fetch()){
		
		echo ' <div class="row">
        <div class="col s6 s12 m6">
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
        <div class="col s12 m6">
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


// Show Helpline 

function showHelpline()
{


	global $mysqli,$db_table_prefix; 
	$stmt = $mysqli->prepare("SELECT 
		helplineTitle,
		helplineNumber,
		description
        FROM helpline
		");
		//$stmt->bind_param($data);
	$stmt->execute();
	$stmt->bind_result($helplineTitle, $helplineNumber, $description);
	while ($stmt->fetch()){
		
		echo ' <div class="row">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$helplineTitle.'</span>
              <p>Description: '.$description.'.</p>
             </div>
            <div class="card-action">
              <a href="#">Contact: '.$helplineNumber.'</a><br>
              
            </div>
          </div>
        </div>
      </div>';

			}


	
	$stmt->close();

}

?>