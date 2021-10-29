<?
	/*	Center Content Block
		Displayer script
		
		Author:  	Matt Waldrop
		Date:  		2008-04-06
		Updated:	2008-04-06
		
			VARIABLES:
			n/a
	*/
?>	

			<!-- PAGE CONTENT -->
		<div style="position: absolute; left: 0px; top: 0px;">	
			<div style="position: absolute; left: 0px; top: 0px;"><img src="/images/calendar.gif" alt="Calendar"></div>
			
			<div class="content" style="position: absolute; left: 0px; top: 45px; width: 400px;">
				<? include("../calendar/classes.php") ?>		
			</div>
			
			<div style="position: absolute; left: 412px; top: 45px; width: 211px;">
				<div class="content"><? include("../calendar/policy.php") ?></div>
				<div class="content"><? include("../calendar/events.php") ?></div>						
			</div>
		
		</div>