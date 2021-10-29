	
<!-- GENERATED CODE BEGIN 
	Company Information
	/includes/yarns/bluesky.php
	-->
	
	<?
			
	$page = array ( "alpacasilk", "alpacasport", "brushedsuri", "organiccotton", "surimerino" ); // "biberon", 
	$num_lines = count($page);
	$logo = "blueskyalpacas.gif";
	$altText = "Blue Sky Alpacas";
		
	for ($idx = 0; $idx < $num_lines; $idx++) {
		include("../includes/yarns/bluesky_$page[$idx].php");
		$Yarnlink[$idx] = $page[$idx];
		$Yarncompany[$idx] = $yarncompany;
		$Yarnline[$idx] = $yarnline;
		$Yarndesc[$idx] = $yarndesc;
		$Yarnamount[$idx] = $yarnamount;
		$Yarnweight[$idx] = $yarnweight;
		$Yarnmsrp[$idx] = $yarnmsrp;
		$Yarnourprice[$idx] = $yarnourprice;
		}
	
	?>	
	
<!-- GENERATED CODE END 
	Company Information
	/includes/yarns/bluesky.php
	-->	
	