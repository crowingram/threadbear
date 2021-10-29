<?
	/*	Right Column - Upper
		Displayer script
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			$rightNavLinks			array loaded from _front_rightnav.php files
			$rightNavText				text to be displayed of loaded link
				=> $rightNavURL		URL of loaded link
			$rightNavHere				flag to display link highlighted when in that area
												to highlight a particular link, assign it's primary value to $rightNavHere
	*/
			

	echo ( "$upperMessage" );
	
	foreach ( $rightNavLinks as $rightNavText => $rightNavURL ) {
		echo ( "<div class='navRight" );
		if ( $rightNavText == $rightNavHere ) {
			echo ( "Head" );
			} else {
			echo ( "Item" );
			}
		echo ( "'><a href='$rightNavURL'>$rightNavText</a></div>\n" );
		}
		
	echo ( "$lowerMessage" );
	//	Add HMTL below for low-column additions to be echoed below upper content  
?>	

			