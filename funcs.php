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