	
<!-- GENERATED CODE BEGIN 
	Company Information
	/includes/yarns/colinette.php
	-->
	
	<?
			
	$page = array ( "cadenza", "fandango", "giotto", "jitterbug", "mohair", "tagliatelli" ); 
	$num_lines = count($page);
	$logo = "colinette.gif";
	$altText = "Colinette";
		
	for ($idx = 0; $idx < $num_lines; $idx++) {
		include("../includes/yarns/colinette_$page[$idx].php");
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
	/includes/yarns/colinette.php
	-->	
	