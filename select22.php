<?php

	require 'connectsmart1.php';
$query="SELECT * FROM agencies WHERE `agency_name`='NEW AGENCY' && `agency_email`='joe@newagency.com' && `agency_password`='bear'; ";
$result=mysqli_query($link,$query);
$results=mysqli_num_rows($result);

print_r($results);