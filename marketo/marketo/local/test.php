<?php
require_once('MktMktowsApiService.php');
require_once('MarketoApiService.php');

$marketo_access_key = "";
$marketo_secret_key = "";


$soapEndPoint = 'https://na-g.marketo.com/soap/mktows/1_3';
$wsdlPath = realpath('mktows-1_3.xml');
$marketo = new MarketoApiService($wsdlPath, array('location' => $soapEndPoint));
$marketo->setCredentials($marketo_access_key, $marketo_secret_key);

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
echo 'xx';
      var_dump($ex->getMessage());
}



