	
<!-- GENERATED CODE BEGIN 
	Company Information
	/includes/yarns/alchemy.php
	-->
	
	<?
			
	$page = array ( "silkpurse" );  // , "haiku", "silkenstraw"
	$num_lines = count($page);
	$logo = "alchemy.gif";
	$altText = "Alchemy Yarns of Transformation";
		
	for ($idx = 0; $idx < $num_lines; $idx++) {
		include("../includes/yarns/alchemy_$page[$idx].php");
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
	/includes/yarns/alchemy.php
	-->	
	