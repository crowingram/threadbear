<?
	/*	Left Column - Upper
		Variable Loader
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$leftNavLinks		array loaded from _front_leftnav.php files
			$leftNavText		text to be displayed of loaded link
				=> $leftNavURL		URL of loaded link
			$leftNavHere		flag to display link highlighted when in that area
										to highlight a particular link, assign it's primary value to $leftNavHere
	*/
	
		$leftNavLinks = array ( "Home" => "/index.php", 
			"Yarns" => "/yarns/index.php",
			"Patterns" => "/patterns/index.php",
			"Ordering" => "/ordering/index.php" );
		$leftNavHere = "Home";
?>