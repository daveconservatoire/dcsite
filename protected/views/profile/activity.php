

<div class="container wrapper">
   <div class="inner_content">
   <div style="height:13px"></div>		
<div class="row">
	<div class="span2" >
	   <? $this->renderPartial("//layouts/components/profilesidebar");?>
	</div>
	<div class="span10">
	<h2>Here's what you've been working on:</h2>
	<br />
<table class="table ">
      <tbody>
<?

$date="";
$olddate="";
$oldtitle="";
$newday=true;
$first=0;
foreach($activitylog as $alitem): 



echo "<tr>";
$date=date("Y-m-d", $alitem['timestamp']);
if($date != $olddate) { 
$newday=true;
 echo "<td>".date("l jS F Y", $alitem['timestamp'])."</td>";
} else {
if ($alitem['title']!=$oldtitle ) {	
echo "<td>&nbsp;</td>";	

}
}
$olddate=date("Y-m-d", $alitem['timestamp']); 

if ($alitem['title']!=$oldtitle || $newday ) {

   
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
$newday=false;
}
$oldtitle=$alitem['title'];
endforeach;?>
      </tbody>
</table>
	


<!--
<h2>Saturday 13th March</h2>
<table class="table ">

                    <tbody>
                      <tr>
                        <td><i class="icon-facetime-video"></i></td>
                        <td><strong>Watched:</strong> Tones and Semitones</td>
                        <td>2 minutes 34 seconds</td>
                      </tr>
                      <tr>
                         <td><i class="icon-list-alt"></i></td>
                        <td><strong>Practiced:</strong> Can you spot an octave?</td>
                        <td>32 Correct Answers</td>
                      </tr>
                      <tr>
                         <td><i class="icon-thumbs-up"></i></td>
                        <td><strong>Daily Proficiency Achieved:</strong> Can you spot an octave?</td>
                        <td>3 day streak!</td>
                      </tr>
                     <tr>
                         <td><i class="icon-star"></i></td>
                        <td><strong>Awarded:</strong> Great Listener!</td>
                        <td></td>
                      </tr>
              
                    </tbody>
                  </table>

-->
     
   </div>
</div>
</div>
</div>
</div>