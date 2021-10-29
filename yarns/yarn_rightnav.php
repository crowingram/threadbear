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
	
		$rightNavLinks = array ( "Alchemy Yarns of Transformation" => "/yarns/show_yarn.php?vendor=alchemy",
			"Berg&egrave;re de France" => "/yarns/show_yarn.php?vendor=bergeredefrance",
			"Cascade Yarns" => "/yarns/show_yarn.php?vendor=cascade",
			"Classic Elite" => "/yarns/show_yarn.php?vendor=classicelite",
			"Colinette" => "/yarns/show_yarn.php?vendor=colinette",
			"Habu Textiles" => "/yarns/show_yarn.php?vendor=habu",
			"Lorna's Laces" => "/yarns/show_yarn.php?vendor=lornaslaces",
			"MaggiKnits" => "/yarns/show_yarn.php?vendor=maggiknits",
			"Ornaghi Filati" => "/yarns/show_yarn.php?vendor=ornaghi",
			"Reynolds" => "/yarns/show_yarn.php?vendor=reynolds",
			"Rowan" => "/yarns/show_yarn.php?vendor=rowan",
			"Schulana" => "/yarns/show_yarn.php?vendor=schulana",
			"ThreadBear Fiber Arts Studio" => "/yarns/show_yarn.php?vendor=threadbear" );
		$rightNavHere = "N/A"; 
		
		$upperMessage = "<div class=navRightHead>QUICK LINKS</div>";
		$lowerMessage = "";
	
?>