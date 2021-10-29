<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	<head>
		<title>Yarns - ThreadBear Fiber Arts Studio</title>
		<meta NAME="Date Created" CONTENT="Created by Matt Waldrop, 06/01/2002">
		<meta NAME="Last Updated" CONTENT="Revised by Matt Waldrop, 04/21/2004">
		<meta NAME="Author" CONTENT="Matt Waldrop, Co-Owner: webmaster@threadbearfiberarts.com">
		<meta NAME="Description" CONTENT="ThreadBear Fiber Arts Studio">
		<meta NAME="Keywords" CONTENT="yarn,knit,knitting,online,shop,local,rob matyska,matt waldrop,cascade 220,brown sheep,colinette,classic elite,manos del uruguay,spinning fiber,spinning wheel">
		<meta NAME="Robots" CONTENT="index,follow">
		<link href="/main.css" rel="stylesheet">
		<link rel="shortcut icon" href="http://www.threadbearfiberarts.com/images2/icons/tb1.ico" type="image/x-icon">
	</head>
	<body topmargin=0 leftmargin=0 marginheight="0" marginwidth="0" bgcolor=#000000>
	
		<? include("../includes/logo.php"); ?>
		
	<!-- CONTENT -->
		<div class="content" style="position: absolute; left: 206px; top: 111px; width: 623px; height: 413;">
			<? include("display_yarnList.php") ?>		
		</div>
	
		<? 
			include("../includes/navigation/front_leftnav.php");
			include("yarn_rightnav.php"); 
			// include("../includes/navigation/front_lowernav.php");
			$leftNavHere = "Yarns";
		 ?>
	
	<!-- LEFT NAVIGATION BAR -->
		<div class="navLeft" style="position: absolute; left: 50px; top: 111px; width: 146px;">
			<? include("../includes/display_leftnav.php") ?>
		</div>
	
	<!-- RIGHT NAVIGATION BAR -->
		<div class="navRight" style="position: absolute; left: 841px; top: 111px; width: 156px;">
			<? include("../includes/display_rightnav.php") ?>	
		</div>
		
	<!-- LAND NAVIGATION BAR  |  SockLand, BabyLand, etc. -->
		<!-- <div class="navLand" style="position: absolute; left: 50px; top: 450px; width: 146px; height: 94; vertical-align: baseline;"> -->
			<? // include("../includes/display_lowernav.php") ?>		
		<!-- </div> -->
	
	</body>
</html>


