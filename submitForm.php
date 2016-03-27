<?php

require_once("marketo/marketoFormSave.php");
require_once("hubspot/hubspotFormSave.php");

if ($_POST["email_confirmation"] == '') { //invisible captcha
	$marketoResult = saveUserToMarketo($_POST);
	$hubSpotResult = saveUserToHubSpot($_POST);
	if ($marketoResult && $hubSpotResult) 
		echo true;
	else 
		echo false;
}