<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>kitedrive Secure File Sharing</title>
	<link rel="stylesheet" href="css/mstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://info.kitedrive.com/css/mktLPSupport.css" />	
	<style>
	.mktFormMsg {color:#ff0000;float:right;margin-top:-75px;}
	</style>
	<!-- SYSTEM JAVASCRIPT - DO NOT EDIT -->
	<script type="text/javascript">
	function fieldValidate(field) {
	  /* call Mkto.setError(field, message) and return false to mark a field value invalid */
	  /* return 'skip' to bypass the built-in validations */
	  return true;
	}
	function getRequiredFieldMessage(domElement, label) {
	  return "Required";
	}
	function getTelephoneInvalidMessage(domElement, label) {
	  return "Please enter a valid telephone number";
	}
	function getEmailInvalidMessage(domElement, label) {
	  return "Please enter a valid email address";
	}
	</script>
	
	<!-- SYSTEM INCLUDES - DO NOT EDIT -->
	<link rel="shortcut icon" href="http://www.kitedrive.com/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="http://www.kitedrive.com/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div id="login_lay">
	<script type="text/javascript"> function mktoGetForm() {return document.getElementById('mktForm_1086'); }</script>
	<form class="lpeRegForm formNotEmpty" method="post" enctype="application/x-www-form-urlencoded" action="/new_account.php" id="mktForm_1086" name="mktForm_1086">
	<table class="login_lay">
	  <tbody>
	  <tr>
	    <td>
	      <table cellpadding="4" class="login_panel">
	      <tbody>

	      <tr><td class="loginhead">Kitedrive Free Account</td></tr>
	      <tr><td id="loginmsg"><div class="err"></div></td></tr>
	      <tr>
	        <td>
				<label>First Name:</label><br />
				<input class='mktFReq field' name="FirstName" id="FirstName" type='text' value=""  maxlength='255' tabIndex='1' /><span class='mktFormMsg'></span>
	        </td>
	      </tr>

	      <tr>
	        <td>
				<label>Last Name:</label><br />
				<input class='mktFReq field' name="LastName" id="LastName" type='text' value=""  maxlength='255' tabIndex='2' /><span class='mktFormMsg'></span>
	        </td>
	      </tr>

	      <tr>
	        <td>
				<label>Company:</label><br />
				<input class='mktFReq field' name="Company" id="Company" type='text' value=""  maxlength='255' tabIndex='4' /><span class='mktFormMsg'></span>
	        </td>
	      </tr>

	      <tr>
	        <td>
				<label>Work Email:</label><br />
				<input class='mktFReq field' name="Email" id="Email" type='text' value=""  maxlength='255' tabIndex='5' /><span class='mktFormMsg'></span>
	        </td>
	      </tr>
	      <tr>
	        <td>
				<input class='mktFormHidden' name="LeadSource" id="LeadSource" type='hidden' value="Kitedrive" />
				<input class='mktFormHidden' name="m" type='hidden' value="1" />
				<input class='mktFormHidden' name="Lead_Source_Detail__c" id="Lead_Source_Detail__c" type='hidden' value="" />
				<input class='mktFormHidden' name="Kitedrive_Sign_up__c" id="Kitedrive_Sign_up__c" type='hidden' value="Yes" />
				<input id='mktFrmSubmit' class="button" type='submit' style="width: auto; overflow: visible; padding-left: .25em; padding-right: .25em;" value='  Sign up  ' name='submitButton' onclick='formSubmit(document.getElementById("mktForm_1086")); return false;' />

			  <span style="display:none;"><input type="text" name="_marketo_comments" value="" /></span>
			  <input type="hidden" name="lpId" value="1849" />
			  <input type="hidden" name="subId" value="32" />
			  <input type="hidden" name="kw" value="" />
			  <input type="hidden" name="cr" value="" />
			  <input type="hidden" name="searchstr" value="" />
			  <input type="hidden" name="lpurl" value="http://www.kitedrive.com/mobile-sign-up" />
			  <input type="hidden" name="formid" value="1086" />

			  <input type="hidden" name="returnURL" value="http://www.kitedrive.com/mobile-sign-up/thank-you.html" />
			  <input type="hidden" name="retURL" value="http://www.kitedrive.com/mobile-sign-up/thank-you.html" />
			  <input type="hidden" name="_mkt_disp" value="return" />
			  <input type="hidden" name="_mkt_trk" value="" />
	        </td>
	      </tr>
      </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
</form>
<div class="footer_panel"></div>
<script type="text/javascript" src="http://info.kitedrive.com/js/mktFormSupport.js"></script>
<script type="text/javascript" src="http://info.kitedrive.com/js/public/jquery-latest.min.js" language="Javascript"></script>
<script type="text/javascript">
    // set no conflict mode for jquery
  var $jQ = jQuery.noConflict();
    //edit this list with the domains you want to block
  var invalidDomains = ["@aol.com", "@bellsouth.net", "@btinternet.com", "@charter.net", "@comcast.net", "@cox.net", "@earthlink.net", "@gmail.com", "@hotmail.com", "@hotmail.co.uk", "@msn.com", "@rediffmail.com", "@sbcglobal.net", "@shaw.ca", "@verizon.net", "@yahoo.com", "@yahoo.ca", "@yahoo.co.uk", "@yahoo.co.in"];

  function formSubmit(elt) {
      // run the custom validation.  If it succeeds, run the Marketo validation
    if (!isEmailGood()) {
       Mkto.setError($jQ("#Email ~ span").prev()[0],"Must be a work email.");
       return false;
    } else {
       Mkto.clearError($jQ("#Email ~ span").prev()[0]);
    }
    return Mkto.formSubmit(elt);
  }

  function isEmailGood() {
    for(i=0; i < invalidDomains.length; i++) {
      if ( $jQ("#Email[value*=" + invalidDomains[i] + "]").length > 0) {
          return false;
      }
    }
    return true;
  }
</script>			
</div>
</body>
</html>