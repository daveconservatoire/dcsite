<div class="container wrapper">
   <div class="inner_content">
   <? $this->renderPartial("//layouts/components/profilesidebar");?>


<? 
$date="";
$olddate="";
$first=0;
foreach($videos as $video): 
$date=date("Y-m-d", $video->timestamp);
if($date != $olddate) { 
  if ($first!=0) {
	  echo "</tbody></table>";
	  $first=1;	  
  }	
	
?>

<table class="table ">
      <tbody>
<h2><?=$date;?></h2>
<? }
$olddate=date("Y-m-d", $video->timestamp); ?>
     <tr>
                        <td><i class="icon-facetime-video"></i></td>
                        <td><strong>Watched:</strong> <a href="<?=bu();?>/lesson/<?=$video->lesson->urltitle;?>"><?=$video->lesson->title;?></a></td>
                        <td>2 minutes 34 seconds</td>
                      </tr>

<? endforeach;?>



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

->

   </div>
</div>
</div>
</div>
</div>