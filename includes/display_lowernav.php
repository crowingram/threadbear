<?
	/* Left Column - Lower
		Displayer script
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$landNavLinks			array loaded from _front_lowernav.php files
			$landNavText				text to be displayed of loaded link
				=> $landNavURL		URL of loaded link
			$landNavHere				flag to display link highlighted when in that area
												to highlight a particular link, assign it's primary value to $landNavHere
	*/
			
	echo ( "$upperMessage" );
	foreach ( $landNavLinks as $landNavText => $landNavURL ) {
		echo ( "<div class='navland" );
		if ( $landNavText == $landNavHere ) {
			echo ( "Head" );
			} else {
			echo ( "Item" );
			}
		echo ( "'" );
		echo ( "><a href='$landNavURL'>$landNavText</a></div>\n" );
		}
		
	echo ( "$lowerMessage" );
	
		
?>	