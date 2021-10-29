<?
	/*	Left Column - Lower
		Variable Loader
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$landNavLinks			array loaded from _front_lowernav.php files
			$landNavText				text to be displayed of loaded link
				=> $landNavURL			URL of loaded link
			$landsNavHere			flag to display link highlighted when in that area
												to highlight a particular link, assign it's primary value to $landNavHere
	
	
		$landNavLinks = array ( "SUMMERLAND" => "/summer/index.php", 
			"SOCKLAND" => "/sock/index.php",
			"BABYLAND" => "/baby/index.php" );
		$landNavHere = "n/a";*/
		
		$landNavLinks = array ( "Find Our Store" => "http://www.mapquest.com/maps/map.adp?formtype=address&country=US&popflag=0&latitude=&longitude=&name=&phone=&level=&addtohistory=&cat=ThreadBear+Fiber+Arts+Studio&address=319+S+Waverly+Rd&city=Lansing&state=MI&zipcode=48917",
			"New Arrivals Blog" => "#",
			"Rob's Black Dog Blog" => "#",
			"Matt's Crowing Ram Blog" => "http://www.crowingram.com/" );
		$landNavHere = "N/A";
		
		$upperMessage = "";
		$lowerMessage = "<div class='articleText' style='padding-top: 175px;'><img src='/images/frontpage/shophours.gif'></div>";
?>