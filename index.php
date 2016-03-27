<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en" itemscope itemtype="http://schema.org/Product"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Active Learning with Video at the University of New Hampshire - Kaltura Case Study</title>
  <meta name="description" content="Turning the learning experience into a fun, engaging and creative experience, teachers and students of the University of New Hampshire are enhancing their courses and homework assignments through the use of Video, in the classroom and over online remote learning with Kaltura and Kaltura's Building Block for Blackboard. " />
  <meta name="author" content="Kaltura">
  
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  
  <!--Facebook Metadata /-->
	<meta property="og:url" content="http://videos.kaltura.com/unh_case_study/" />
	<!-- Use the following as the URL to make Mobile devices to directly play the video instead of going to the hosting site.
		The video will not really play in-lin on the FB wall, it will be opened in a new browser window and, thus in Mobile will launche the native player.
		Note – This will make a poor experience on Desktop, and will disable our ability to collect statistics, as it will directly go to the video instead through our player.
		Note 2 – this will FAIL in Facebook's debugger, even though it will work in the Wall. The reason it fails is because Facebook expects a real website URL on og:url. 
		Note 3 – on Tablet users expect in-browser playback, and this will immediately launch the native player instead…
	<meta property="og:url" content="http://cdnapi.kaltura.com/p/811441/sp/81144100/playManifest/entryId/1_vb7hkhip/flavorId/1_oevan8qw/format/url/protocol/http/a.mp4" />
	-->
	<!-- Set the following to get Facebook insights/tracking 
		Get your Facebook app Id from: https://developers.facebook.com/apps/	
	-->
	<meta property="fb:app_id" content="122405801272254" />
	<!-- Video details: -->
	<meta property="og:title" content="Active Learning With Video at the University of New Hampshire - Kaltura Case Study" />
	<meta property="og:description" content="Turning the learning experience in to a fun, engaging and creative experience, teachers and students of the University of New Hampshire are enhancing their courses and homework assignments through the use of Video, in the classroom and over online remote learning with Kaltura and Kaltura's Building Block for Blackboard." />
	<!-- This describes the nature of this video to Facebook, it doesn't have a practical use yet. 
		Facebook probably use it internally for better content classification.
		Can be: 'video.movie', 'video.episode', 'video.tv_show', or 'video.other'
		 -->
	<meta property="og:type" content="video.other" />
	<!-- This is the thumbnail for the video: -->
	<meta property="og:image" content="http://cdnbakmi.kaltura.com/p/811441/sp/81144100/thumbnail/entry_id/1_vb7hkhip/version/100004/width/600" />
	<!-- probably used for internal site classification, no aparent practical use yet -->
	<meta property="og:site_name" content="Kaltura Video Portal - Kaltura and UNH Case Study" />
	<!-- The Flash video version -->
	<meta property="og:video" content="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1355965070/wid/_811441/uiconf_id/11748601/entry_id/1_vb7hkhip" />
	<meta property="og:video:secure_url" content="https://cdnsecakmi.kaltura.com/index.php/kwidget/cache_st/1355965070/wid/_811441/uiconf_id/11748601/entry_id/1_vb7hkhip" />
	<meta property="og:video:width" content="600" />
	<meta property="og:video:height" content="340" />	
	<meta property="og:video:type" content="application/x-shockwave-flash" />
	<!-- The HTML5 fallback video version -->
	<meta property="og:video" content="http://cdnapi.kaltura.com/p/811441/sp/81144100/playManifest/entryId/1_vb7hkhip/flavorId/1_oevan8qw/format/url/protocol/http/a.mp4" />
	<meta property="og:video:secure_url" content="https://cdnsecakmi.kaltura.com/p/811441/sp/81144100/playManifest/entryId/1_vb7hkhip/flavorId/1_oevan8qw/format/url/protocol/http/a.mp4" />
	<meta property="og:video:width" content="600" />
	<meta property="og:video:height" content="340" />
	<meta property="og:video:type" content="video/mp4" />
	<!-- 
		There are two bugs with Facebook's video fallback:
		Secure URL is not acted on: http://developers.facebook.com/bugs/374114345976370/
		type video/mp4 is not acted on: http://developers.facebook.com/bugs/463064127056326/ 
		According to Facebook, the Open Graph was modified in 2011.
		The original specifications: http://developers.facebook.com/docs/opengraphprotocol/
		The new specifications: https://developers.facebook.com/docs/opengraph/video/
		You'll notice that in the original specs Facebook defined 'fallback' tags for mp4 on HTML5 environments.
		The new specs obviously dropped that support, as no fallback nor mp4 tags are defined.
	-->
	<!-- Additional metadata about your video: -->
	<!-- When was the video first released, expressed in ISO 8061 format -->
	<meta property="og:video:release_date" content="2013-02-13" />
	<meta property="og:video:duration" content="428" /> <!-- video duration in seconds -->
	<!-- For more, visit: https://developers.facebook.com/docs/opengraph/video/ -->
	
	
	
  <!--Google+ Metadata /
  	For more info: https://developers.google.com/+/plugins/snippet/
  	Google+ claims to support schema.org and facebook's open graph
  	We're adding the following schema.org for best compliancy as Google+ doesn't seem to recognize video from OG
  	Note the inline tags on the kaltura_player div as well
  	More info about schema.org at: http://schema.org/VideoObject
  	To debug your page, use: http://www.google.com/webmasters/tools/richsnippets 
  	-->
	<meta itemprop="name" content="Active Learning With Video at the University of New Hampshire - Kaltura Case Study">
	

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <!-- <link rel="stylesheet" href="css/minified.css"> -->
  
  <!-- CSS imports non-minified for staging, minify before moving to production-->
  <link rel="stylesheet" href="css/imports.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="http://www.kaltura.com/p/811441/sp/81144100/embedIframeJs/uiconf_id/9977831/partner_id/811441"></script>
	<script>
	
		function writeLog(msg) {
			if (console.log) console.log(msg);
		}
		
		function isValidEmailAddress(emailAddress) {
		    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		    return pattern.test(emailAddress);
		};
		
		function validateFormItem () {
			if( ($(this).data('form') == 'required') && ( $(this).val() == '' ) ){
		        $(this).parents('.field').addClass('error');
		        return;
		    } else {
		    	$(this).parents('.field').removeClass('error');
		    }
		    if( ($(this).attr('type') == 'email') && (isValidEmailAddress($(this).val()) == false) ){
		        $(this).parents('.field').addClass('error');
		    } else {
		    	$(this).parents('.field').removeClass('error');
		    }
		}
		
		// preform actions after page load -
		$(document).ready(function() {
			
			$('#loadingDiv').hide()
			.ajaxStart(function() {
		        $(this).show();
		    }).ajaxStop(function() {
		        $(this).hide();
		    });

			// Form validation
			$('input').bind("keyup blur", validateFormItem);
			
			// validate the form and submit the details 
			$('#submitbtn').click(function(event) {
				event.preventDefault();
				formError = false;
				if ($('#firstnametxt').val() == '') {
					$('#firstnametxt').parents('.field').addClass('error');
					formError = true;
				}
				if ($('#lastnametxt').val() == '') {
					$('#lastnametxt').parents('.field').addClass('error');
					formError = true;
				}
				if (isValidEmailAddress($('#emailtxt').val()) == false) {
					$('#emailtxt').parents('.field').addClass('error');
					formError = true;
				}
				if (formError) return false;
				var dataString = 'first_name=' + $('#firstnametxt').val() + '&last_name='+ $('#lastnametxt').val() + '&email='+ $('#emailtxt').val() + '&would_you_like_to_be_contacted=' + $('#would_you_like_to_be_contacted').is(':checked') + '&email_confirmation='+ $('#email_confirmation').val(); 
				$('#contact_form').hide();
				writeLog('sending to marketo: ' + dataString);
				$.ajax({
				    type: "POST",
				    url: "submitForm.php",
				    data: dataString,
				    success: function() {
				      $('#contact_form').html("<div id='message'></div>");
				      $('#contact_form').show();
				      $('#message').html("<h5>Thank You!</h5>")
				      .append('<p>A Kaltura education video specialist will contact you shortly.<br />' + 
				      		'Learn more about <a href="http://corp.kaltura.com/Products/Video-Applications/Video-Building-Block-for-Blackboard" target="_blank">Kaltura\'s Video Building Block for Blackboard</a>.</p>' +
				      		'<ul class="thankyoulist"><li><a href="http://corp.kaltura.com/blackboard-free-trial?app=edu&type=blackboard">Start a Free Trial of the Building Block</a></li>' + 
				      		'<li><a href="http://videos.kaltura.com/media/Kaltura+Building+Block+for+Blackboard+%7C+Video+Walkthrough/1_8i0f2y9f" target="_blank">Watch The Video Walkthrough</a></li>' + 
				      		'<li><a href="http://blackboard.kaltura.com/" target="_blank">Visit The Demo Site</a></li>' +
				      		'<img src="img/bb-and-kaltura.png" border="0" />')
				      .hide()
				      .fadeIn(1500);
				    }
				});
				return false;
		    });

			//always keep the copyright year to the current year
			var todayDate = new Date();
			var currentYear = todayDate.getFullYear();
			$('#yearspan').text(currentYear);
			
			// embed the Kaltura player on page load:
			// 1_2cuiz5xb - technology
			// 1_l8btfikz - students
			// 1_jgbyitcs - teachers
			// 1_vb7hkhip - case study
			kWidget.embed({
				'targetId': 'kaltura_player',
				'wid': '_811441',
				'uiconf_id' : '11748601',
				'entry_id' : '1_vb7hkhip', //that's the main video
				'flashvars' : {
							'externalInterfaceDisabled' : false,
							'autoPlay' : false,
							'streamerType' : 'hdnetwork',
							'akamaiHD.loadingPolicy' : 'preInitialize',
							'akamaiHD.asyncInit' : 'true'
						},
				'readyCallback': function( playerId ){
					window.kdp = $('#'+playerId).get(0);
					window.kdp.addJsListener('mediaReady', 'mediaReady');
					kdp.addJsListener("playerPlayed", 'playerPlayed');
					kdp.addJsListener("playerPaused", 'playerPaused');
					kdp.addJsListener("playerPlayEnd", 'playerPlayEnd');
					kdp.addJsListener("playbackComplete", 'playbackComplete');
					kdp.addJsListener("openFullScreen", 'openFullScreen');
					kdp.addJsListener("doReplay", 'doReplay');
					kdp.addJsListener("playerSeekStart", 'playerSeekStart');
					kdp.addJsListener("showAdvancedShare", 'showAdvancedShare');
					registerMarketingEvent ('player_loaded');
				}
			});
		});
		
		function playerPlayed () {
			registerMarketingEvent ('player_play');
		}
		function playerPaused () {
			registerMarketingEvent ('player_pause');
		}
		function playerPlayEnd () {
			registerMarketingEvent ('player_playbackEnd');
		}
		function playbackComplete () {
			registerMarketingEvent ('player_playbackComplete');
		}
		function openFullScreen () {
			registerMarketingEvent ('player_fullscreen');
		}
		function doReplay () {
			registerMarketingEvent ('player_replayClick');
		}
		function playerSeekStart () {
			registerMarketingEvent ('player_seek');
		}
		function showAdvancedShare () {
			registerMarketingEvent ('player_addthisShareClick');
		}
		
		function registerMarketingEvent(trackedAction) {
			currnetVideoId = window.kdp.evaluate('{mediaProxy.entry.id}');
			//hubspot event tracking
			_hsq.push(['trackEvent', { id: 'unh-case-study/' + currnetVideoId + '/' + trackedAction, value: 1 }]);
			//marketo's crappy link based tracking
			trackingLink = 'unh-case-study/' + currnetVideoId + '/' + trackedAction;
			mktoMunchkinFunction('clickLink', { href: trackingLink });
		}
		
		function mediaReady(info) {
			videoDesc = window.kdp.evaluate('{mediaProxy.entry.description}');
			$('#videodesc').text(videoDesc);
			registerMarketingEvent ('player_mediaLoaded');
		}
		
		function replaceVideo(videoId) {
			if (window.kdp) {
				currnetVideoId = window.kdp.evaluate('{mediaProxy.entry.id}');
				if (currnetVideoId != videoId) {
					//set the active playlist item
					$('#item_'+currnetVideoId).removeClass('active');
					$('#item_'+videoId).addClass('active');
					//switch the video
					window.kdp.sendNotification('changeMedia', {'entryId':videoId});
				}
			}
		}
	</script>
</head>

<body>
	<div id="wrap">
		
		<div class="sixteen colgrid row">
			<header class="row">
				<div class="sixteen columns">
					<div style="float:left;">
						<a href="http://videos.kaltura.com">
							<img class="logo" src="img/kaltura_logo.png" border="0">
						</a>
					</div>
					<div style="float:right;">
						<a href="http://infotech.unh.edu/richmedia" target="_blank">
							<img class="logo" src="img/unh-ogo.png" border="0">
						</a>
					</div>
				</div>
			</header>
		</div>
		
		<div class="stripeContainer"></div>
		
		<div id="button-bar">
           	<ul id="top-action-buttons">
		    	<li class="free-trial-button"><a target="_blank" href="http://corp.kaltura.com/free-trial">Video Platform Free Trial </a></li>
				<li class="contact-sales-button"><a target="_blank" href="http://corp.kaltura.com/company/contact-us">Get Video Solutions </a></li>
			</ul>
		</div>
		
		<div class="sixteen colgrid row" id="main">
			<header class="row">
				<hgroup class="sixteen columns">
					<h1>Active Learning With Video</h1>
					<p>At the University of New Hampshire - Kaltura Education Case Study</p>
				</hgroup>
			</header>
			
			<section class="row">
				<div class="eleven columns">
					<article class="video">
						<div id="myVideoContainer" style="position:absolute;top:0;left:0;left: 0;right: 0;bottom:0;border:none;">
  							<div id="kaltura_player" style="width:100%;height:100%;" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
  								<meta itemprop="name" content="Active Learning With Video at the University of New Hampshire - Kaltura Case Study">
								<meta itemprop="description" content="Turning the learning experience in to a fun, engaging and creative experience, teachers and students of the University of New Hampshire are enhancing their courses and homework assignments through the use of Video, in the classroom and over online remote learning with Kaltura and Kaltura's Building Block for Blackboard.">
								<meta itemprop="thumbnail" content="http://cdnbakmi.kaltura.com/p/811441/sp/81144100/thumbnail/entry_id/1_vb7hkhip/version/100004/width/600" />
								<meta itemprop="thumbnailUrl" content="http://cdnbakmi.kaltura.com/p/811441/sp/81144100/thumbnail/entry_id/1_vb7hkhip/version/100004/width/600" />
								<meta itemprop="duration" content="T1M33S" />
								<meta itemprop="width" content="600" />
								<meta itemprop="height" content="340" />
								<meta itemprop="playerType" content="Flash" />
								<meta itemprop="embedUrl" content="http://cdnapi.kaltura.com/index.php/kwidget/cache_st/1355965070/wid/_811441/uiconf_id/11748601/entry_id/1_vb7hkhip" />
								<meta itemprop="contentUrl" content="http://cdnapi.kaltura.com/p/811441/sp/81144100/playManifest/entryId/1_vb7hkhip/flavorId/1_oevan8qw/format/url/protocol/http/a.mp4" />
								<!-- Add link to the captions file of the entry -
								<meta itemprop="caption" content="http://..." />
								-->
  							</div>
  						</div>
					</article>
				</div>
				<div class="five columns">
					<?php
						$playlistItems = array(array('partnerId'=>'811441',
											'active' => 'active',
											'entryId' => '1_vb7hkhip', 
											'title'=>'Active Learning With Video',
											'linkText'=>'The Case Study'),
										array('partnerId'=>'811441',
											'active' => '',
											'entryId' => '1_jgbyitcs', 
											'title'=>'Bringing The Curriculum To Life',
											'linkText'=>'The Faculty Story'),
										array('partnerId'=>'811441',
											'active' => '',
											'entryId' => '1_l8btfikz', 
											'title'=>'Increasing Creativity and Engagement',
											'linkText'=>'The Students Story'),
										array('partnerId'=>'811441',
											'active' => '',
											'entryId' => '1_2cuiz5xb', 
											'title'=>'Boosting Video Usage Across Campus',
											'linkText'=>'The Technology')
										);
					?>
					<?php foreach ($playlistItems as $item) : ?>
						<div class="playlistItem <?php echo $item['active']; ?>" id="item_<?php echo $item['entryId']; ?>">
							<div class="thumbLink">
								<a onclick="javascript:replaceVideo('<?php echo $item['entryId']; ?>');return false;">
									<img typeof="foaf:Image" src="http://cdnbakmi.kaltura.com/p/<?php echo $item['partnerId']; ?>/sp/<?php echo $item['partnerId']; ?>00/thumbnail/entry_id/<?php echo $item['entryId']; ?>/width/120/">
								</a>
								<a class="gallery-play-video" onclick="javascript:replaceVideo('<?php echo $item['entryId']; ?>');return false;"></a>
							</div>
							<div class="thumbsdetails">
								<span class="thumbsdetailsTitle"><?php echo $item['title']; ?></span>
								<a class="thumbsdetailsLink"  onclick="javascript:replaceVideo('<?php echo $item['entryId']; ?>');return false;"><?php echo $item['linkText']; ?></a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
			<section class="row">
				<div class="eleven columns">
					<p id="videodesc">Turning teaching and learning into a fun, engaging and creative experience, lecturers and students of the University of New Hampshire are actively using Video. Video is used in classes and assignments, both online and offline, leveraging Kaltura's Building Block for Blackboard.</p>
				</div>
				<div class="five columns">
					<div id="loadingDiv"><img src="img/spinner.gif" border="0" style="border:none;" /></div>
					<form id="contact_form" action="" method="" data-form="validate">
						<a name="contact-us"></a>
						<h2>Contact Us</h2>
						<p>Interested in learning more? Get in touch with us.</p>
						<dl class="field row">
							<dt class="text"><input id="firstnametxt" name="firstnametxt" type="text" placeholder="First Name" data-form="required"></dt>
							<dd class="msg"><span class="caret"></span>Please fill your first name.</dd>
						</dl>
						<dl class="field row">
							<dt class="text"><input id="lastnametxt" name="lastnametxt" type="text" placeholder="Last Name" data-form="required"></dt>
							<dd class="msg"><span class="caret"></span>Please fill your last name.</dd>
						</dl>
						<dl class="field row">
							<dt class="text"><input id="emailtxt" name="emailtxt" type="email" placeholder="Email" data-form="required"></dt>
							<dt class="confirmation-field"><input id="email_confirmation" name="email_confirmation" type="email" placeholder="Email"></dt>
							<dd class="msg"><span class="caret"></span>Please fill a valid email.</dd>
						</dl>
						<dl class="field row">
							<label class="checkbox" for="would_you_like_to_be_contacted">
								<input name="would_you_like_to_be_contacted" type="checkbox" id="would_you_like_to_be_contacted" style="display:none;">
								<span></span> I’d like a Kaltura sales person to contact me</label>
						</dl>
						<dl class="field row">
							<label class="checkbox" for="sign_up_newsletter">
								<input name="sign_up_newsletter" type="checkbox" id="sign_up_newsletter" style="display:none;">
								<span></span> Send me Kaltura news and updates</label>
						</dl>
						<dl class="field row">
							<dt class="btn submit"><input id="submitbtn" value="Send Me Updates!" type="submit"></dt>
						</dl>
					</form>
				</div>
			</section>
		</div>

	</div> <!-- wrap end-->
	
	<div class="footerContainer" id="footer">
		<div class="footercontent">
			<p class="footer-text">Kaltura provides the world’s first Open Source Online Video Platform, transforming the way people work, learn, and entertain using online video.  The Kaltura platform engages hundreds of millions of viewers by providing media companies advanced video management, publishing, and monetization tools that increase their reach and monetization and simplify their video operations. Kaltura offers next generation learning for millions of students and teachers by providing educational institutions disruptive online video solutions for improved teaching, learning, and increased engagement across campuses and beyond. For more information visit: <a href="http://corp.kaltura.com" target="_blank">corp.kaltura.com</a>.</p>
			<hr />
			<a href="http://corp.kaltura.com/" class="footer-logo"><img width="103" height="56" src="img/kaltura-logo-footer.png"></a>
			
			<p class="footer-copyright">Copyright &copy; <span id="yearspan">today</span> Kaltura Inc.<br>
All Rights Reserved. Designated trademarks and brands are the property of their respective owners, Use of this web site constitutes acceptance of the <a href="http://corp.kaltura.com/terms-of-use">Terms of Use</a> and <a href="http://corp.kaltura.com/privacy-policy">Privacy Policy</a>, User submitted media on this site is licensed under: Creative Commons Attribution-Share Alike 3.0 Unported License. Creative Commons License</p>
		</div>
	</div>
	<script src="js/libs/gumby.min.js"></script>
  	<script src="js/plugins.js"></script>
  	<script src="js/main.js"></script>
  
  <!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <!-- Social Widget Rendering Javascript /-->
  <script src="http://platform.twitter.com/widgets.js"></script>
  <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <!-- End Social Widget Rendering Javascript /-->
  
  <!-- Start of Async HubSpot Analytics Code -->
	<script type="text/javascript">
	(function(d,s,i,r) {
	if (d.getElementById(i)){return;}
	var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	n.id=i;n.src='//js.hubspot.com/analytics/'+(Math.ceil(new Date()/r)*r)+'/219667.js';
	e.parentNode.insertBefore(n, e);
	})(document,"script","hs-analytics",300000);
	</script>
  <!-- End of Async HubSpot Analytics Code -->
  
<script type="text/javascript">
document.write(unescape("%3Cscript src='" + document.location.protocol +
  "//munchkin.marketo.net/munchkin.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>Munchkin.init('984-SDM-859');</script>
				
</body>
</html>
