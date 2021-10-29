	<!-- GENERATED CODE BEGIN 
	Company Information
	/includes/yarns/maggiknits.php
	-->

	<?
			
	$page = array ( "angora", "cotton", "linen" );  // , "lurex", "merinochunky", "merinochunkymulti", "mistslub", "mohairloop", "multilinen", "tweedfleckaran", "tweedfleckchunky", "woolslub"
	$num_lines = count($page);
	$logo = "maggiknits.gif";
	$altText = "MaggiKnits";
		
	for ($idx = 0; $idx < $num_lines; $idx++) {
		include("../includes/yarns/maggiknits_$page[$idx].php");
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
	/includes/yarns/maggiknits.php
	-->