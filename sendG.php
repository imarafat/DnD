<?php 

if(isset( $_GET['name'] )){
 
 
	$name = $_GET['name'];

	$items = $_GET['c'];
	
	$phone = $_GET['b'];
	
	$email = $_GET['a'];

	$comp = $_GET['d'];
	
	$title = $_GET['e'];
	
	$dept = $_GET['f'];

	
  
	
 $email_to = "marketing@ruhof.com";


//  $email_to = "hkmdarafat@gmail.com";


 $subject = "CUSTOM KIT REQUEST";

 $body = "<div> <h2> CUSTOM KIT REQUEST </h2>" 
			." <p> <h4> Selected Product Items </h4>  ".$items

			." <br /> <h4> Customer Information </h4>
                                  <b> Name </b>: " .$name
                        ." <br /> <b> Email </b>: ".$email 
			." <br /> <b> Phone </b>: " .$phone
                        ." <br /> <b> Company Name </b>: ".$comp 
                        ." <br /> <b> Title </b>: ".$title
			." <br /> <b> Department </b>: " .$dept ."</p> </div>"; 
				
				
$options = [];
$params=['api_user'=>'msobel',
'api_key'=>'be93c7c008',
'to'=>$email_to,
'toname'=>'Ruhof Healthcare',
'subject'=>$subject,
'from'=>$email,
'html'=>$body];

$defaults = array(
CURLOPT_URL => 'https://api.sendgrid.com/api/mail.send.json',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $params,
);
$ch = curl_init();
curl_setopt_array($ch, ($options + $defaults));

echo curl_exec($ch);

}

?>
