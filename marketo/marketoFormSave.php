<?php
date_default_timezone_set('America/New_York');

function saveUserToMarketo($formValues) {
  	//SEND TO MARKETO
  	require_once("marketo/MktMktowsApiService.php");
  	require_once("marketo/MarketoApiService.php");
	$accessKey = "";
	$secretKey = "";
	
	$soapEndPoint = 'https://na-g.marketo.com/soap/mktows/1_3';
	
	try {
	    if(!@file_get_contents($soapEndPoint.'?WSDL')) {
	        watchdog("register-marketo", 'No WSDL found at ' . $soapEndPoint.'?WSDL');
	    }
	    $marketo = new MarketoApiService($soapEndPoint.'?WSDL', array('location' => $soapEndPoint));
		$marketo->setCredentials($accessKey, $secretKey);
	} catch(SoapFault $e) {
	    error_log("Marketo Lead Gen Failed".$e->getMessage());
		return FALSE;
	}
	
	$leadRecord = new LeadRecord();
	
	$leadRecord->Email = $formValues["email"];
	$leadRecord->leadAttributeList = new stdClass();
	$attributes = array();
	if ($formValues["first_name"] != '')
		$attributes[] = $marketo->createAttribute('FirstName', $formValues["first_name"]);
	if ($formValues["last_name"] != '')
		$attributes[] = $marketo->createAttribute('LastName', $formValues["last_name"]);
	if ($formValues["phone"] != '')
		$attributes[] = $marketo->createAttribute('Phone', $formValues["phone"]);
	if ($formValues["company"] != '')
		$attributes[] = $marketo->createAttribute('Company', $formValues["company"]);
	if ($formValues["website"] != '')
		$attributes[] = $marketo->createAttribute('Website', $formValues["website"]);
	if ($formValues["country"] != '')
		$attributes[] = $marketo->createAttribute('Country', $formValues["country"]);
	if ($formValues["title"] != '')
		$attributes[] = $marketo->createAttribute('Title', $formValues["title"] );
	if ($formValues["vertical"] != '')
		$attributes[] = $marketo->createAttribute('Vertical__c', $formValues["vertical"]);
	if ($formValues["state"] != '')
		$attributes[] = $marketo->createAttribute('State', $formValues["state"]);
	if ($formValues["would_you_like_to_be_contacted"] == 'true')
		$attributes[] = $marketo->createAttribute('Would_You_Like_to_Be_Contacted__c', true);
	if ($formValues["sign_up_newsletter"] == 'true')
		$attributes[] = $marketo->createAttribute('Send_Newsletter__c', true);
	if ($formValues["k_description"] != '')
		$attributes[] = $marketo->createAttribute('Description', $formValues["k_description"]);
	//mark it as UNH lead for tracking and salesforce campagin -
	$attributes[] = $marketo->createAttribute('UNH__c', 'UNH');
	
	$leadRecord->leadAttributeList->attribute = $attributes;
	
	$params = new ParamsSyncLead();
	$params->leadRecord = $leadRecord;
	$params->marketoCookie = isset($_COOKIE['_mkto_trk']) ? $_COOKIE['_mkto_trk'] : null;
	
	try
	{
	      $marketo->syncLead($params);
	      return TRUE;
	}
	catch(SoapFault $ex)
	{
		error_log("Marketo Lead Gen Failed".$ex->getMessage());
		return FALSE;
	}
}
