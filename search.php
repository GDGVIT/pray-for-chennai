
<?php
$connection = mysql_connect("merabite.db.10424157.hostedresource.com","merabite","Ashwini@0529") or die(mysql_error());
$database = mysql_select_db('merabite') or die(mysql_error());


if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select name,area,service,number from contacts where name like '%$q%' or area like '%$q%' LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['name'];
$area=$row['area'];
$service = $row['service'];
$number = $row['number'];

$b_username='<strong>'.$q.'</strong>';
$b_area='<strong>'.$q.'</strong>';
$b_service ='<strong>'.$q.'</strong>';
$b_number = '<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_area = str_ireplace($q, $b_area, $area);
$final_service = str_ireplace($q, $b_service, $service);
$final_number = str_ireplace($q, $b_number, $number);
echo ' <div class="row">
        <div class="col s12 m12 l12">
          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">'.$final_username.'</span>
              <p>Description: '.$final_service.'.</p>
              <p>Area: '.$final_area.'</p>
             </div>
            <div class="card-action">
              <a href="#">Contact: '.$final_number.'</a><br>
              
            </div>
          </div>
        </div>
      </div>';
?>
<!--div class="show" align="left">
<span class="name">< ?php echo $final_username; ?>
</span>&nbsp;<br/>< ?php echo $final_email; ?>
< ?php echo $final_service; ?>
</span>&nbsp;<br/>< ?php echo $final_number; ?>

<br/>
</div-->


<?php
}
}
?>