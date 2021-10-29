<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	<head>
		<title>Calendar - ThreadBear Fiber Arts Studio</title>
		<meta NAME="Date Created" CONTENT="Created by Matt Waldrop, 06/01/2002">
		<meta NAME="Last Updated" CONTENT="Revised by Matt Waldrop, 04/21/2004">
		<meta NAME="Author" CONTENT="Matt Waldrop, Co-Owner: webmaster@threadbearfiberarts.com">
		<meta NAME="Description" CONTENT="ThreadBear Fiber Arts Studio">
		<meta NAME="Keywords" CONTENT="yarn,knit,knitting,online,shop,local,rob matyska,matt waldrop,cascade 220,brown sheep,colinette,classic elite,manos del uruguay,spinning fiber,spinning wheel">
		<meta NAME="Robots" CONTENT="index,follow">		
		<link href="/main.css" rel="stylesheet">		
		<link href="/calendar/calendar.css" rel="stylesheet">
		<link rel="shortcut icon" href="http://www.threadbearfiberarts.com/images2/icons/tb1.ico" type="image/x-icon">
	</head>
	<body topmargin=0 leftmargin=0 marginheight="0" marginwidth="0" bgcolor=#000000>
	
		<? include("../includes/logo.php"); ?>
		
	<!-- CONTENT -->
		<div class="content" style="position: absolute; left: 206px; top: 111px; width: 623px; height: 413;">
			<!-- PAGE CONTENT -->
			<div style="position: absolute; left: 0px; top: 0px;">	
				<div style="position: absolute; left: 0px; top: 0px;"><img src="/images/calendar.gif" alt="Calendar"></div>
				
				<div class="content" style="position: absolute; left: 0px; top: 45px; width: 400px;">
					<div class="contentHeading">Registration Information:</div>
					<div class="content">Please, read the Class &amp; Event Policies to the left <em>before</em> registering for any class.</div>
					<div class="content">To register for any class, please call 517.703.YARN or 866.939.BEAR toll-free outside the Lansing area.  Of course, you can also register in person.  Please, be prepared to give that staff member with whom you speak the name of the class and, if multiple sections of a particular class appear in the dates offered, the dates of the section for which you would like to register.</div>
					<div class="content">You will receive a registration sheet for each of your classes.  This sheet contains information about the dates, times, prices, basic skill level, and materials fees for your class where they apply.  Your registration sheet also lists any materials that you will need to bring to class as well as any pre-class homework that will need to be complete before attending class.  If you will not be visiting the store prior to class, be sure to notify the staff member who takes your registration so that your registration sheet can be mailed to you.</div>
					<div class="content">Finally, while it may seem obvious, it bears repeating that ThreadBear pays all class fees directly to your instructor.  Please, purchase materials for class at ThreadBear so that we can continue to bring quality instruction to you.</div>
					<div class="content">Thank you so much for taking classes at ThreadBear Fiber Arts Studio.</div>
				</div>
				
				<div style="position: absolute; left: 412px; top: 45px; width: 211px;">
					<div class="content"><? include("../calendar/policy.php") ?></div>						
				</div>
			
			</div>		
		</div>
	
		<? 
			include("../includes/navigation/front_leftnav.php");
			include("rightnav.php"); 
			// include("../includes/navigation/front_lowernav.php");
			$leftNavHere = "Calendar";
		 ?>
	
	<!-- LEFT NAVIGATION BAR -->
		<div class="navLeft" style="position: absolute; left: 50px; top: 111px; width: 146px;">
			<? include("../includes/display_leftnav.php") ?>
		</div>
	
	<!-- RIGHT NAVIGATION BAR -->
		<div class="navRight" style="position: absolute; left: 841px; top: 111px; width: 156px;">
		
			<? $rightNavHere = "Register for a class"; include("../includes/display_rightnav.php") ?>	
		</div>
		
	<!-- LAND NAVIGATION BAR  |  SockLand, BabyLand, etc. -->
		<!-- <div class="navLand" style="position: absolute; left: 50px; top: 450px; width: 146px; height: 94; vertical-align: baseline;"> -->
			<? // include("../includes/display_lowernav.php") ?>		
		<!-- </div> -->
	
	</body>
</html>


