<?php

class signup{
public $aname;
public $aaddr1;
public $aaddr2;
public $acity;
public $acountry;
public $apostcode;
public $aemail;
public $atelephone;
public $aurl;
public $apassword;
public $acontact;

public function __construct(){

}

function name($name){
		$this->aname=filter_var($name, FILTER_SANITIZE_STRING);
	return $this->aname;
		}
	
function addr1($addr1){
		$this->aaddr1=filter_var($addr1, FILTER_SANITIZE_STRING);
	return $this->aaddr1;
		}
		
function addr2($addr2){
		$this->aaddr2=filter_var($addr2, FILTER_SANITIZE_STRING);
	return $this->aaddr2;
		}
		
		function city($city){
		$this->acity=filter_var($city, FILTER_SANITIZE_STRING);
	return $this->acity;
		}
		
		
		function country($country){
		$this->acountry=filter_var($country, FILTER_SANITIZE_STRING);
	return $this->acountry;
		}


function postcode($postcode){
		$this->apostcode=filter_var($postcode, FILTER_SANITIZE_STRING);
	return $this->apostcode;
		}

public function email($email){
$this->aemail=filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$this->error="$email is not a valid email address".'<br />';
echo $this->error;
break;

}
else{

return $this->aemail;

}
}
function password($password){
		$this->apassword=md5($password);
	return $this->apassword;
		}

public function telephone($telephone){
if(!preg_match('/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/',$telephone)){
$this->error="$telephone is not a valid phone number";

echo $this->error.'<br />';
break;
}
else{
	$this->atelephone=$telephone;
return $this->atelephone;
}
}
function contact($contact){
		$this->acontact=filter_var($contact, FILTER_SANITIZE_STRING);
	return $this->acontact;
		}

 public function website($website){
 $qurl=filter_var($website, FILTER_SANITIZE_URL);
if(!filter_var($qurl,FILTER_VALIDATE_URL)){
$this->error="$website is not a valid URL".'<br />';
echo $this->error;	
break;
	}
else{
return $this->aurl=$qurl;
}
 }
function insert(){
require 'connectsmart1.php';
$query5 ="INSERT INTO agencies(agency_name,agency_address1,agency_address2,agency_city,agency_country,agency_postcode,agency_email, agency_password, agency_telephone,agency_website,agency_contact) 
VALUES('$this->aname','$this->aaddr1','$this->aaddr2','$this->acity','$this->acountry', '$this->apostcode','$this->aemail','$this->apassword','$this->atelephone;','$this->aurl','$this->acontact')";
if(mysqli_query($link, $query5)){
echo "Thank you for signing up. You will receive a confirmation in your email";
}
else{
echo $tread= "Please fill in all fields";
}
}
}
?>