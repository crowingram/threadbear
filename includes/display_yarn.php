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

	<div class="content" style="position: absolute; top: 0px; left: 0px;">
		<img src="/images/logos/<? echo ( $logo ); ?>" alt="<? echo ( $altText ); ?>">

<?
	// load array into variables
	$num_items = count ($yarn_loader) / 3;
	for ($idx = 0; $idx < $num_items; $idx++) {
		$code[$idx] = $yarn_loader[$idx*3];
		$name[$idx] = $yarn_loader[$idx*3+1];
		$qty[$idx] = $yarn_loader[$idx*3+2];
		}
		
	$instock_num_items = 0;
	
	for ( $idx = 0; $idx < $num_items; $idx++ ) {
		if ( $qty[$idx] > 0 ) {
			$instock_num_items++;
			}	
		}	
	
	$num_pages = floor(($instock_num_items-1) / $itemsperpage);
	
	?>					
	<div class=headingYarnVendor><a href="/yarns/show_yarn.php?vendor=<? echo ($vendor); ?>"><? echo ($yarncompany); ?></a></div>
	<div class=headingYarnName><? echo ($yarnline); ?></div>
	<div class=technicalInfo style="padding-bottom: 15px;"><? echo ($yarndesc); ?></div>
	<? if ( $yarnamount <> "" ) { ?> <div class=technicalInfo><? echo ($yarnamount); ?></div> <? } ?>
	<? if ( $yarnweight <> "" ) { ?> <div class=technicalInfo><? echo ($yarnweight); ?></div> <? } ?>
	
	
	<?
	if ($yarnmsrp!=$yarnourprice) { 
	echo ("\n\t");	// HTML FORMATTING ONLY
		?><div class=retailPrice style="padding-top: 0px;"><br>Originally, $<? echo ($yarnmsrp); ?></div><? 
		}
		
	echo ("\n\t");	// HTML FORMATTING ONLY
	?><div class=ourPrice>Our Price, $<? echo ($yarnourprice); ?></div><br><br><?
	
	
	/* PAGE NAVIGATION WITHIN ARRAY PRINTOUT
		This section of code writes the HTML for the divided pages of color swatches 
		developed from the number of page ($num_pages) and number of items per page
		($itemsperpage) information provided by the user at the top of the document. 
	*/
	if ($num_pages > 0) {
		?><div class=navtrail style="text-align: right;"><?
		echo ("Page");	
		for ($idx=0; $idx<=$num_pages; $idx++) {
			$page_no = $idx+1;
			if ($idx<>$page) {
				echo ("<a href=show_yarn.php?vendor=$vendor&&yarn=$yarn&&page=");
				echo ($idx);
				echo (">");
				}
			else {
				echo ("<b>");
				}
			echo (" $page_no");
			if ($idx<>$page) {
				echo ("</a> ");
				}
			else {
				echo ("</b> ");
				}
			if ($idx < $num_pages) {
				echo ("| ");
				}			
			}
		?></div><br><?
		}
	// END PAGE NAVIGATION WITHIN ARRAY PRINTOUT
			
	
	/* DISPLAY ACTUAL COLOR SWATCHES
		This section traverses the arrays loaded earlier and displays the associated images
		within the range of this particular page.
	*/	
	
	$row = 0;
	$flag = 0;
	$start_num = $page * $itemsperpage;
	
	//	BEGIN HTML TABLE
	echo ("\n\t");	// HTML FORMATTING ONLY
	?><table cellpadding=10 cellspacing=0 border=0><?
	echo ("\n\t\t"); //HTML FORMATTING ONLY
	?><tr><?
	
	for ($idx=0; $idx < $instock_num_items; $idx++) { 
		if ($flag == 0) {
			$this_item = $idx + $start_num;
			if ($code[$this_item] != "" && $qty[$this_item] != 0 ) {
				if ($idx%$itemsperrow == 0 && $idx > 0) {
					echo ("\n\t\t</tr><tr>");
					$row++;
					}
				$filename = strtolower($code[$this_item]);
				$filename = str_replace(' ', '', $filename);
				echo ("\n\t\t\t<td class=");
				if ( $qty[$this_item] < 1 ) {
					echo ("table0");
					}
				else {
					echo ("table1");
					}
				echo ("><div class='yarnSample'>");
				if ( $thumbnailFlag == TRUE ) {
						echo ("<a href=\"/images/yarn/$fileprefix$filename.jpg\" target=\"_blank\"><img src=\"/images/yarn/$fileprefix$filename-tn.jpg\" border=\"0\"></a>");
					} else {
						echo ("<img src=\"/images/yarn/$fileprefix$filename.jpg\" border=\"0\">");
					}
				if ($showcode == 1) {
					echo ("<br>$code[$this_item]");
					}
				if ($showname == 1) {
					echo ("<br>$name[$this_item]</div></td>");
					}
				if ($idx%$itemsperrow == $itemsperrow-1 && $row == $num_rows-1) { $flag++; }
				}
			}
		}
	
	echo ("\n\t\t"); //HTML FORMATTING ONLY
	?></tr><?
	echo ("\n\t"); //HTML FORMATTING ONLY
	?></table><?
	
	// END DISPLAY COLOR SWATCHES
	
	/* PAGE NAVIGATION WITHIN ARRAY PRINTOUT
		This section of code writes the HTML for the divided pages of color swatches 
		developed from the number of page ($num_pages) and number of items per page
		($itemsperpage) information provided by the user at the top of the document. 
	*/
	if ($num_pages > 0) {
		?><div class=navtrail style="text-align: right;"><?
		echo ("Page");	
		for ($idx=0; $idx<=$num_pages; $idx++) {
			$page_no = $idx+1;
			if ($idx<>$page) {
				echo ("<a href=show_yarn.php?vendor=$vendor&&yarn=$yarn&&page=");
				echo ($idx);
				echo (">");
				}
			else {
				echo ("<b>");
				}
			echo (" $page_no");
			if ($idx<>$page) {
				echo ("</a> ");
				}
			else {
				echo ("</b> ");
				}
			if ($idx < $num_pages) {
				echo ("| ");
				}			
			}
		?></div><br><?
		}
	// END PAGE NAVIGATION WITHIN ARRAY PRINTOUT
	?>
	
	</div>