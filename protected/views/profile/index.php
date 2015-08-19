<div class="container wrapper">
	<div class="inner_content">
		<div style="height:13px"></div>		
			<div class="row">
				<div class="span2" >
					<? $this->renderPartial("//layouts/components/profilesidebar");?>
				</div>
				<div class="span10">
					<div class="row">
					<div class="profile-topbar">
						<div class="span5 whiteback">
						<div class="padding">
							<a href="#myModal" role="button" class="btn dc-btn-red pull-right" data-toggle="modal">Update your info</a>
							<h1 style="margin: 0px"><?=$user->name;?></h1>
						
							<h3>About me</h3>
							<p><?=$user->biog;?></p>
						
						</div> 
						</div>
						
							<div class="span5 whiteback">
						<div class="padding">
						<? if($user->subamount=="0"):?>
							<a href="<?=bu();?>/subscribe" role="button" class="btn dc-btn-red pull-right">Update your subscription</a>
							<? else:?>
							<i class="icon-star intro-icon-large dc-text-orange pull-right"></i>
						<? endif;?>
							
						
							<h1 style="margin: 0px">My Subscription</h1>
						
							<h1>$<?=$user->subamount;?> per month</h1>
							<? if($user->subamount=="0"):?>
							<p>Dave Conservatoire will be free forever, but if you are in a position to, subscribing will help us serve music students around the world.</p>
							<? else: ?>
							<p>Thankyou so much for your subscription. Your support is vital in helping us serve music students around the world.</p>
							<? endif;?>
						
						</div> 
						</div>
					
					</div>
					</div>
				<div class="pad30"></div>
					<div class="row">
						<div class="span5 whiteback">
						<div class="padding"><h3>Statistics</h3>	  <table style="width: 100%">
	  <tr><td>Groove Score:</td><td class="pull-right"><?=$user->points;?></td></tr>
	  <tr><td>Lessons Viewed:</td><td class="pull-right"><?=$videoscount;?></td></tr>
	  <tr><td>Exercises Answered:<td class="pull-right"><?=$excount; ?></td></tr>
	  <tr><td>Member Since:<td class="pull-right"><? echo date("F jS Y", $user->joinDate);?></td></tr>
	  </table></div> </div>
						<div class="span5 whiteback"><div class="padding"><h3>Recent Activity</h3>
						<table class="table ">
      <tbody>
<?

$oldlesson="";
$oldtype="";
$counter=0;
foreach($activitylog as $alitem): 

echo "<tr>";
if($alitem['urltitle']!=$oldlesson || $alitem['type']!=$oldtype) {
 
    if($alitem['type']=='video') {?>
                        <td><i class="icon-facetime-video"></i></td>
                        <td><strong>Watched:</strong> 
                        <?
                        } 
                        if ($alitem['type']=='exercise') {
                        ?>
	                        
	                       <td><i class="icon-list-alt"></i></td>
                        <td><strong>Practiced:</strong>   
                        <?
                        }
                        
                           if ($alitem['type']=='mastery') {
                        ?>
	                        
	                       <td><i class="icon-star-empty"></i></td>
                        <td><strong>Mastered:</strong>   
                        <?
                        }
                        ?>
                        
                        <a href="<?=bu();?>/lesson/<?=$alitem['urltitle'];?>"><?=$alitem['title']?></a></td>
                       
                      </tr>
                      <?
                      }
                      $oldlesson=$alitem['urltitle'];
                      $oldtype=$alitem['type'];
                    

endforeach;?>
      </tbody>
</table>
	


						</div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Update your Profile</h3>
  </div>
  <div class="modal-body">
  <?php echo $this->renderPartial('/user/_form', array('model'=>$user)); ?>

</div>