<?php
class signup{

public $sfirstname;
public $slastname;
public $saddr1;
public $saddr2;
public $scity;
public $scountry;
public $spostcode;
public $semail;
public $spassword;
public $stelephone;

public function __construct(){

}

function sname1($sname1){
		$this->sfirstname=filter_var($sname1, FILTER_SANITIZE_STRING);
	return $this->sfirstname;
		}
		function sname2($sname2){
		$this->slastname=filter_var($sname2, FILTER_SANITIZE_STRING);
	return $this->slastname;
		}
	
function addr1($addr1){
		$this->saddr1=filter_var($addr1, FILTER_SANITIZE_STRING);
	return $this->saddr1;
		}
		
function addr2($addr2){
		$this->saddr2=filter_var($addr2, FILTER_SANITIZE_STRING);
	return $this->saddr2;
		}
		
		function city($city){
		$this->scity=filter_var($city, FILTER_SANITIZE_STRING);
	return $this->scity;
		}
		
		
		function country($country){
		$this->scountry=filter_var($country, FILTER_SANITIZE_STRING);
	return $this->scountry;
		}


function postcode($postcode){
		$this->spostcode=filter_var($postcode, FILTER_SANITIZE_STRING);
	return $this->spostcode;
		}

public function email($email){
$this->semail=filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$this->error="$email is not a valid email address".'<br />';

echo $this->error;
break;

}
else{

return $this->semail;

}
}
function password($password){
		$this->spassword=md5($password);
	return $this->spassword;
		}

public function telephone($telephone){
if(!preg_match('/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/',$telephone)){
$this->error="$telephone is not a valid phone number";

echo $this->error.'<br />';
break;
}
else{
	$this->stelephone=$telephone;
return $this->stelephone;

}

}
function insert(){
require 'connectsmart1.php';
$query5 ="INSERT INTO students(student_firstname,student_lastname,student_address1,student_address2,student_city,student_country,student_postcode,student_email, student_password, student_telephone) 
VALUES('$this->sfirstname','$this->slastname','$this->saddr1','$this->saddr2','$this->scity','$this->scountry', '$this->spostcode','$this->semail','$this->spassword','$this->stelephone');";
if(mysqli_query($link, $query5)){
echo $success= "Thank you for getting in touch.We will contact you by the end of the next business day.<br />";
//header("location:student1.php");
unset($_POST);
}
else{

echo $tread= "Please fill in all fields";

}
}
public function __destruct(){

$des= "the object has been destroyed";
}
}