<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://www.corona13.com/favicon.ico"/> 
			<title>Bpit Presents Corona 13 | The Annual techno-cultural fest</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="description" content="College life is one of the most exciting phases in anyone's life.It is in this period when you learn to handle the pleasure of  freedom with responsibility of a career simultaneously.Along with the studies, cultural activities go along a long way in shaping the personality of a student and here only we came across the idea of an event to accomplish that... OUR CORONA-The Annual Techno Cultural Fest.Corona has helped the students of our institution and various others to explore their and strengths and weaknesses up to a great extent.CORONA (earlier Radiance) started in a small room by a bunch of enthusiastic students in the very first year of the establishment of the institute and now it is one of the biggest festivals of IP university">
			<meta name="keywords" content="corona'13 website, official corona'13, Corona'13, Corona2k13, corona bpit,BPIT fest">
			<meta name="author" content="Shekhar Sharma( http://facebook.com/shekharsharma91 )">

<!--meta tags end site-->

<!-- Meta tags facebook -->

			<meta property="og:title" content="Bpit Presents Corona'13 | The Annual techno-cultural fest"/>
			<meta property="og:image" content="http://www.corona13.com/open.jpg"/>
			<meta property="og:site_name" content="Bpit Corona'13- The annual Techno Cultural Fest"/>
			<meta property="og:description" content="College life is one of the most exciting phases in anyone's life.It is in this period when you learn to handle the pleasure of  freedom with responsibility of a career simultaneously.Along with the studies, cultural activities go along a long way in shaping the personality of a student and here only we came across the idea of an event to accomplish that... OUR CORONA-The Annual Techno Cultural Fest.Corona has helped the students of our institution and various others to explore their and strengths and weaknesses up to a great extent.CORONA (earlier Radiance) started in a small room by a bunch of enthusiastic students in the very first year of the establishment of the institute and now it is one of the biggest festivals of IP university"/>
				
<link rel="stylesheet" type="text/css" href="styles.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.flip.min.js"></script>

<script type="text/javascript" src="script.js"></script>

</head>

<body>

<h1>Corona`13 proudly Sponsored By:- </h1>
<?php


$sponsors = array(
	array('nemo','Title Sponsor of BPIT CORONA13<br> NFA is your gateway to success. ',''),
	array('mdh','Powered By MDH masala house',''),
array('co-name','Sponsored By Prem Studio','http://www.studioprem.com/'),
array('redfm','Radio Partner 93.5 Red FM',''),
array('city','Media Partner Of corona13. Cityplus is a new venture of Jagran Prakashan Ltd, publisher of worlds largest read newspaper Dainik Jagran','http://cityplus.jagran.com'),
	array('aptech','Sponsored By Aptech!!','http://www.aptech-education.com/'),
	array('rlabs','Sponsored By rlabs','http://rlabz.com/'),
	array('optimus','Sponsored By optimus',''),
	array('unique','Online e-product Partner Uniquekart.com','http://www.uniquekart.com'),
	array('bluebell','Sponsored By Bluebell!!',''),
	array('cmc','Sponsored By CMC-Your IT partner','http://www.cmcltd.com/'),
		array('shakti','Sponsored By Shakti Bhog',''),
	
	array('egegloble','Sponsored By ',''),
	array('gaurav_life_style','OSponsored By ',''),
	array('niit','Sponsored By NIIT','http://www.niit.com'),
	array('satmola','Sponsored By satmola','http://www.satmola.com/'),
	array('avon','Sponsored By AVON','http://www.in.avon.com'),
	array('denizen','Sponsored By Denizen',''),
	array('kimms','Sponsored By Kimms',''),
	array('cadd','Sponsored By Cadd',''),
	array('aiesec','Sponsored By AISEC',''),
	array('choco','Sponsored By schokolove',''),
	array('marvelous','Sponsored By Marvelous- The Hair style partner !!',''),
	array('indbaaz','Sponsored By Indbaaz',''),
		array('smartprep','Sponsored By smartprep','http://smartprep.co.in/'),
	array('sbp_logo','Sponsored By State bank of Patiala',''),
	array('hdfc','Sponsored By HDFC Auto Loans',''),
	

	array('code','Sponsored By Code To Crack, Contact Anshu: 9711149212',''),

	array('stonz1','Sponsored By Stonzn Studdz: Artificial Trendy Jewellery ',''),
	array('manjeet','Sponsored By Manjeet tattooz: You think it, We ink It !!',''),
	array('tejas','Sponsored By Tejas Academy: your success',''),
	array('travel','Sponsored By Travel Shanti','http://www.travelshanti.com/'),
	array('naveen','Sponsored By Naveen Caterers',''),
	array('imaniac','Sponsored By Imaniac',''),
	
	array('zync','Sponsored By ZYNC',''),
	array('revolution','Sponsored By revolution',''),
	array('logoultimate','Sponsored By ultimate mathematics',''),
	array('logothreads','Sponsored By threads & beads',''),
	array('career','Sponsored By career launcher',''),
	array('jvc','Sponsored By JVC',''),
	array('clarion','Sponsored By Clarion',''),
	array('gateforum','Sponsored By gateforum',''),
	array('Paras','innovation partner',''),
	array('ieee','Sponsored By IEEE',''),
		array('omega','Sponsored By Omega',''),
		array('dub','Sponsored By DU beats','')
	
);



?>


<p class="note">Title Sponsor : NEMO FINDERS ACADEMY, Powered By MDH MASALA HOUSE.</p>

<div id="main">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to See Profile">
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>


</body>
</html>
