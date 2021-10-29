<?
	/*	Left Column - Lower
		Variable Loader
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$landNavLinks		array loaded from _front_lowernav.php files
			$landNavText			text to be displayed of loaded link
				=> $landNavURL		URL of loaded link
			$landsNavHere		flag to display link highlighted when in that area
										to highlight a particular link, assign it's primary value to $landNavHere
	*/
	
		$landNavLinks = array ( "SUMMERLAND" => "/summer/index.php", 
			"SOCKLAND" => "/sock/index.php",
			"BABYLAND" => "/baby/index.php" );
		$landNavHere = "n/a";
?>