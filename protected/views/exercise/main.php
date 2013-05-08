    <div class="container">	
    	<h1 class="playlisttitle"><?=$lessontitle;?> - (<?=$seriestitle;?>, Part <?=$lessonno;?>)</h1>
			<table style="font-size: small">
				<tr>
					<td style="width:470px; padding: 0px"><? if(isset($prevurl)){ echo "Previous Lesson:";}?> <a href="<?=$prevurl;?>"><?=$prevtitle;?></a></td>
				<td style="width:470px; padding: 0px; text-align: right"><? if(isset($nexturl)){ echo "Next Lesson:";}?> <a href="<?=$nexturl;?>"><?=$nexttitle;?></a></td>
	</tr>
			</table>
			<br />			
    		<div id="page-container">
					<div id="page-container-inner">
						<div id="fb-root"></div>	
						<div id="container" class="single-exercise visited-no-recolor" style="overflow: hidden"></div>
						<div style="padding: 10px;">&nbsp;</div>
					</div>
			</div>
		<div class="push"></div>