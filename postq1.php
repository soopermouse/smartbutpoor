<?php

class lol{

public $qname;
public $qemail;
public $qtelephone;
public $vquery;

public function __construct(){


}

function name($name){
		$this->qname=filter_var($name, FILTER_SANITIZE_STRING);
	return $this->qname;
		}
	

public function email($email){
$this->qemail=filter_var($email, FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$this->error="$email is not a valid email address".'<br />';

echo $this->error;
break;

}
else{

return $this->qemail;

}
}


public function telephone($telephone){
if(!preg_match('/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/',$telephone)){
$this->error="$telephone is not a valid phone number";

echo $this->error.'<br />';
break;
}
else{
	$this->qtelephone=$telephone;
return $this->qtelephone;

}

}

 public function query($query){
 if(!filter_var($query,FILTER_SANITIZE_STRING)){
 	$this->error="query not valid";
echo $this->error;
 break;
 	}else{
 $this->vquery=$query;
 return $this->vquery;
 }
}

function insert(){
require 'connectsmart1.php';
$query5 ="INSERT INTO queries(q_name,q_email,q_telephone,query) VALUES('$this->qname','$this->qemail','$this->qtelephone;','$this->vquery');";
if(mysqli_query($link, $query5)){

echo $success= "Thank you for getting in touch.We will contact you by the end of the next business day.<br />";

}

else{

echo $tread= "Please fill in all fields";

}

}
}




