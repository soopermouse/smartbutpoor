<?php

class signup{
public $ename;
public $eaddr1;
public $eaddr2;
public $ecity;
public $ecountry;
public $epostcode;
public $eemail;
public $etelephone;
public $eurl;
public $epassword;
public $econtact;

public function __construct(){

}

function name($name){
		$this->ename=filter_var($name, FILTER_SANITIZE_STRING);
	return $this->ename;
		}
	
function addr1($addr1){
		$this->eaddr1=filter_var($addr1, FILTER_SANITIZE_STRING);
	return $this->eaddr1;
		}
		
function addr2($addr2){
		$this->eaddr2=filter_var($addr2, FILTER_SANITIZE_STRING);
	return $this->eaddr2;
		}
		
		function city($city){
		$this->ecity=filter_var($city, FILTER_SANITIZE_STRING);
	return $this->ecity;
		}
		
		
		function country($country){
		$this->ecountry=filter_var($country, FILTER_SANITIZE_STRING);
	return $this->ecountry;
		}


function postcode($postcode){
		$this->epostcode=filter_var($postcode, FILTER_SANITIZE_STRING);
	return $this->epostcode;
		}

public function email($email){
$this->eemail=filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$this->error="$email is not a valid email address".'<br />';
echo $this->error;
break;

}
else{

return $this->eemail;

}
}
function password($password){
		$this->epassword=md5($password);
	return $this->epassword;
		}

public function telephone($telephone){
if(!preg_match('/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/',$telephone)){
$this->error="$telephone is not a valid phone number";

echo $this->error.'<br />';
break;
}
else{
	$this->etelephone=$telephone;
return $this->etelephone;
}
}
function contact($contact){
		$this->econtact=filter_var($contact, FILTER_SANITIZE_STRING);
	return $this->econtact;
		}

 public function website($website){
 $qurl=filter_var($website, FILTER_SANITIZE_URL);
if(!filter_var($qurl,FILTER_VALIDATE_URL)){
$this->error="$website is not a valid URL".'<br />';
echo $this->error;	
break;
	}
else{
return $this->eurl=$qurl;
}
 }
function insert(){
require 'connectsmart1.php';
$query5 ="INSERT INTO employers(emp_name,emp_addr_1,emp_addr_2,emp_city,emp_country,emp_postcode,emp_email, emp_password, emp_phone,emp_website,emp_contact) 
VALUES('$this->ename','$this->eaddr1','$this->eaddr2','$this->ecity','$this->ecountry', '$this->epostcode','$this->eemail','$this->epassword','$this->etelephone','$this->eurl','$this->econtact');";
if(mysqli_query($link, $query5)){
	//header("Location: mypage.php");
echo "Thank you for signing up. You will receive a confirmation in your email";
}
else{
echo $tread= "Please fill in all fields";
}
}
}
?>