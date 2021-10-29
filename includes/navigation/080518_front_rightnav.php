<?
	/*	Right Column - Upper
		Variable Loader
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$rightNavLinks		array loaded from _front_rightnav.php files
			$rightNavText		text to be displayed of loaded link
			$rightNavURL		URL of loaded link
			$rightNavHere		flag to display link highlighted when in that area
										to highlight a particular link, assign it's primary value to $rightNavHere
										
			DELETED LINKS
			"Known Errata" => "#",
	*/
			
		$rightNavLinks = array ( "Find Our Store" => "http://www.mapquest.com/maps/map.adp?formtype=address&country=US&popflag=0&latitude=&longitude=&name=&phone=&level=&addtohistory=&cat=ThreadBear+Fiber+Arts+Studio&address=319+S+Waverly+Rd&city=Lansing&state=MI&zipcode=48917",
			"Rob's Black Dog Blog" => "http://blackdog.threadbearfiberarts.com/",
			"Matt's Crowing Ram Blog" => "http://crowingram.threadbearfiberarts.com/" );
		$rightNavHere = "N/A";
		
		$upperMessage = "";
		$lowerMessage = "<div class='articleText' style='padding-top: 175px;'><img src='/images/frontpage/shophours.gif'></div>";
?>