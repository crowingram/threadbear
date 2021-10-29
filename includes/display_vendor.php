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
				for ($idx = 0; $idx < $num_lines; $idx++) { ?>
						<!-- <? echo ($Yarnline[$idx]); ?> -->
										
						<div class=main>
							<div class="vendorOffering"><? echo ("<a href='/yarns/show_yarn.php?vendor=$vendor&&yarn=$Yarnlink[$idx]'>$Yarnline[$idx]</a>"); ?></div>
							<? echo ($Yarndesc[$idx]); ?><br>
							<? if ($Yarnamount[$idx]<>"") { echo ($Yarnamount[$idx]."<br>"); } ?>
							<? if ($Yarnweight[$idx]<>"") { echo ($Yarnweight[$idx]."<br>"); } ?>
						</div>
						<?
							if ($Yarnmsrp[$idx]!=$Yarnourprice[$idx]) { 
							echo ("\n\t");	// HTML FORMATTING ONLY
								?>Originally, $<? echo ($Yarnmsrp[$idx]); ?><br><? 
								}
								
							echo ("\n\t");	// HTML FORMATTING ONLY
							?>Our Price, $<? echo ($Yarnourprice[$idx]); ?><br>
				<? } ?>
	</div>