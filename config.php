<?php
//$mysqli=new mysqli("iitjeeorganic.db.10424157.hostedresource.com","iitjeeorganic","Ashwini@0529","iitjeeorganic");
$mysqli=new mysqli("mysql.hostinger.in","u860596125_pray","prayforchennainow","u860596125_pray");
date_default_timezone_set('Asia/kolkata');
if(mysqli_connect_errno())
{
		printf("Connection failed %s",mysqli_connect_error());
		exit();
}
?>
