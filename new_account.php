<?php  
  
// Turn on error reporting so we can see if anything is going wrong  
//error_reporting(E_ALL);  
//ini_set('display_errors', 1);  

$details = $_POST;

// Send the form to Appliance
if( isset($details['Kitedrive_Sign_up__c']) && $details['Kitedrive_Sign_up__c']==='Yes' )  
{  
	register_appl ($details);
	register_mkto ($details);
}
else {
	header('Location: http://www.kitedrive.com');
}

function register_appl ($info) {
	$applURL = "https://secure.kitedrive.com/courier/web/1000@/wmReg.html";
	$applPost = "email=" .$info['Email'] ."&verify_new_register_email=1&m=" .$info['m'];
	$ch2 = curl_init();
	curl_setopt($ch2, CURLOPT_HEADER, 1);
	curl_setopt($ch2, CURLOPT_POST, 1);
	curl_setopt($ch2, CURLOPT_URL,$applURL);
	curl_setopt($ch2, CURLOPT_VERBOSE,false);
	curl_setopt ($ch2, CURLOPT_POSTFIELDS, $applPost);
	curl_setopt($ch2, CURLOPT_REFERER, "http://www.kitedrive.com/");
	ob_start();
	   $response = curl_exec($ch2);
	   curl_close($ch2);
	$contents = ob_get_contents();
	ob_end_clean();
	$filtered = preg_replace("/.*<html>/s", "<html>", $contents );
	if ($response) {
	  //echo $filtered;
	} else {
	  echo $contents.'\r\nOops! There was an error creating your account: '.$response;
	  error_log($contents.'\r\nError in secure.kitedrive.com appliance new account response: '.$response);
	}
}

// Post to Marketo
function register_mkto ($info) {
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.info.accellion.com/index.php/leadCapture/save');
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $info);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, "http://www.kitedrive.com");
	 ob_start();
        $response = curl_exec($ch);
        curl_close($ch);
	 $contents = ob_get_contents();
	 ob_end_clean();
	 $filtered = preg_replace("/.*<html>/s", "<html>", $contents );
	 if ($response) {
	   echo $filtered;
	 } else {
	   echo $contents.'\r\nOops! There was an error registering your account: '.$response;
	   error_log($contents.'\r\nError in marketo response: '.$response);
	 }

}

?>