<?php
require_once 'connectsmart1.php';
$query="SELECT job_city FROM jobs";
$result=mysqli_query($link,$query);
$rows=array();
while($row=mysqli_fetch_array($result)){
foreach($result as $row){
	echo '<div class="row">';
$city=$row['job_city'];
echo '<div class="col-md-2 col-md-offset-1 small">';
echo '<h4>'.'<a href="jobscity.php?city='."$city".'"'.'>'.$city.'</a>'.'</h4>'.'<br />';
echo '</div>';
}
echo '</div>';

}