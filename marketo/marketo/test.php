<?php
ini_set('error_reporting', E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

require_once('MktMktowsApiService.php');
require_once('MarketoApiService.php');

$marketo_access_key = "";
$marketo_secret_key = "";

$soapEndPoint = 'https://na-g.marketo.com/soap/mktows/1_3';

try {
	if(!@file_get_contents($soapEndPoint.'?WSDL')) {
		print 'No file found at ' . $soapEndPoint.'?WSDL';
		die();
	}
	$marketo = new MarketoApiService($soapEndPoint.'?WSDL', array('location' => $soapEndPoint));
	$marketo->setCredentials($marketo_access_key, $marketo_secret_key);
} catch(SoapFault $e) {
	print 'aaa - ' . $e->getMessage();
	die();
}

$leadRecord = new LeadRecord();

$leadRecord->Email = '';
$leadRecord->leadAttributeList = new stdClass();

$attributes = array();

$attributes[] = $marketo->createAttribute('LastName', 'Kreichman');
$attributes[] = $marketo->createAttribute('Kaltura_Partner_ID__c', '1');
$attributes[] = $marketo->createAttribute('Company', 'test');
$attributes[] = $marketo->createAttribute('Kaltura_Partner_Activation_Type__c', 'desc');
$attributes[] = $marketo->createAttribute('Kaltura_Content_Category__c', 'category');
$attributes[] = $marketo->createAttribute('Phone', 'phone');
$attributes[] = $marketo->createAttribute('Description_Review__c', 'desc2');
$attributes[] = $marketo->createAttribute('Website', 'url');

$leadRecord->leadAttributeList->attribute = $attributes;

$params = new ParamsSyncLead();
$params->leadRecord = $leadRecord;
//$params->returnLead = true;

try
{
      $marketo->syncLead($params);
}
catch(SoapFault $ex)
{
// do something
      var_dump($ex->getMessage());
}



