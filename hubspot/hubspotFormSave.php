<?php
date_default_timezone_set('America/New_York');

function saveUserToHubSpot($formValues) {
  	
	//Process a new form submission in HubSpot in order to create a new Contact.
    $hubspotutk = $_COOKIE['hubspotutk'];  //grab the cookie from the visitors browser.
    $ip_addr = $_SERVER['REMOTE_ADDR'];  //IP address too.
    $hs_context = array(
            'hutk' => $hubspotutk,
            'ipAddress' => $ip_addr,
            'pageUrl' => curPageURL(),
            'pageTitle' => 'UNH Case Study'
        );
    $hs_context_json = json_encode($hs_context);
    
    //Need to populate these varilables with values from the form.
    $str_post = "firstname=" . urlencode($formValues["first_name"])
            . "&lastname=" . urlencode($formValues["last_name"])
            . "&email=" . urlencode($formValues["email"])
            . "&asked_for_contact_by_sales_rep=" . urlencode($formValues["would_you_like_to_be_contacted"])
            . "&hs_context=" . urlencode($hs_context_json);  //Leave this one be :)
    
     //replace the values in this URL with your portal ID and your form GUID
    $endpoint = 'https://forms.hubspot.com/uploads/form/v2/219667/edd0ff42-ab05-4e93-818c-8da382d3df8e';
    
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    try
	{
	      $response = @curl_exec($ch);  //Log the response from HubSpot as needed.
    	  @curl_close($ch);
	      return TRUE;
	}
	catch(Exception $ex)
	{
		error_log("HubSpot Lead Gen Failed".$ex->getMessage());
		return FALSE;
	}
}


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}