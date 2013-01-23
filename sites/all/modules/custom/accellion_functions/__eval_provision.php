<?php

//Provision Eval

//$url = 'https://proserv.accellion.net/pdns/eval/eval.php';
include_once 'debugmode.php';

if (empty($_POST["Email"])){	//exit from a bogus post i.e. a scanner
	header( 'Location: http://www.accellion.com/trial-demo' ) ;
} else {	

	$params["email"] = $_POST["Email"];
	$params["firstname"] = $_POST["FirstName"];
	$params["company"] = $_POST["Company"];
	$params["evaltype"] =$_POST["evaltype"];

	$producttype = $_POST["evaltype"];
	switch($producttype){
		case "SCH-E":			//45-day hosted collaboration
			$referer="http://www.accellion.com/trial-free-45-day-hosted-collaboration.html";
			break;
		case "SCV-E":		// 45 day VM trial
			$params["X45_day_Secure_Collab_VM_Trial_Platform__c"] =$_POST["X45_day_Secure_Collab_VM_Trial_Platform__c"];
			$referer="http://www.accellion.com/trial-free-45-day-collaboration-vm.html";
			break;
	}
     
//	curl_request_async($url,$params);	//Create license and hosted appid
	curl_request_async($url,$_POST);	//Create license and hosted appid
	 
//Register with Marketo

    if (!On_Stage_server()){
	register_mkto ($_POST);
    } else {
// Debug output
        $body = "User input debug output from stage on " . date("F j, Y, g:i a") ."\n";
//		$body .= "Stack trace:\n";
//   	ob_start();
//   	debug_print_backtrace();
//   	$body .= ob_get_contents()."\n\n";
//   	ob_end_clean();
	 	$body .= "Server variables:\n";
 	 	$body .= pretty_var($_SERVER)."\n\n";
	 	$body .= "Internal variables:\n";
	 	$body .= pretty_var(globalvars())."\n\n";
	 	echo "<pre>$body</pre>";
    } //debug exit
}

function globalvars(){
    $result=array();
    $skip=array('GLOBALS','_ENV','HTTP_ENV_VARS',
                        '_POST','HTTP_POST_VARS','_GET',
                        'HTTP_GET_VARS',
                        '_COOKIE',
                        'HTTP_COOKIE_VARS','_SERVER',
                        'HTTP_SERVER_VARS',
                        '_FILES','HTTP_POST_FILES',
                        '_REQUEST','HTTP_SESSION_VARS',
                        '_SESSION');
    $skip=array('GLOBALS','_SERVER','default_appid_secret','license_url','dbconnstring_powerdns','dbconnstring_provision','appid_url');
    $skip=array('GLOBALS','_SERVER','body');
    foreach($GLOBALS as $k=>$v)
        if(!in_array($k,$skip))
            $result[$k]=$v;
    return $result;
}//functionglobalvars

function pretty_var($myArray){
    return var_export($myArray,true);
//    return str_replace(array("\n"," "),array("<br>","&nbsp;"), var_export($myArray,true))."<br>";
}// pretty_var

function register_mkto ($info) {
	$ch = curl_init();	
	curl_setopt($ch, CURLOPT_URL, 'http://www.info.accellion.com/index.php/leadCapture/save');
	curl_setopt($ch, CURLOPT_HEADER, 1);	
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $info);
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	ob_start();
	$response = curl_exec($ch);
	curl_close($ch);
	$contents = ob_get_contents();
	ob_end_clean();
	$filtered = preg_replace("/.*<html>/s", "<html>", $contents );
	if ($response) {
		echo $filtered;
	} else {
		echo $contents.'\r\nError in marketo response: '.$response;
		error_log($contents.'\r\nError in marketo response: '.$response);
	}

}

function curl_request_async($url, $params) {
    if (!On_Stage_server()){
//    if (true){
		$out="";
		foreach ($params as $key => &$val) {
			if (is_array($val)) $val = implode(',', $val);
			$post_params[] = $key.'='.urlencode($val);
      	}
      	$post_string = implode('&', $post_params);

      	$parts=parse_url($url);

//		$fp = fsockopen ("ssl://proserv.accellion.net",443, $errno, $errstr, 15);
		$fp = fsockopen ($url,443, $errno, $errstr, 15);
		$out ="POST /pdns/eval/eval.php HTTP/1.1\r\n";
      	$out.= "Host: ".$parts['host']."\r\n";
      	$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
      	$out.= "Content-Length: ".strlen($post_string)."\r\n";
      	$out.= "Connection: Close\r\n\r\n";

      	$out .= $post_string;
      	fwrite($fp, $out);
      	fclose($fp);

	} else {
// On Stage - do syncronous request
		echo "<h1>Data from provisioning server pdns/eval/eval.php</h1>";
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://10.41.1.113/pdns/eval/eval.php');
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, $referer);

        $response = curl_exec($ch);
        curl_close($ch);
		echo "<h1>Error response: $response from pdns/eval/eval.php</h1>";

	}
  }

?>