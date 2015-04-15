<div class="banner">
   <div class="container intro_wrapper">
      <div class="inner_content">
         <!--welcome-->
         <div class="welcome_index animated fadeInDown">
            Welcome to <span class="dc-text-orange">Dave Conservatoire</span> - a free online music school, <br />aiming to provide a world-class music education for <span class="dc-text-orange">everyone</span>.
         </div>
         <!--//welcome-->
      </div>
   </div>
</div>
<div class="container wrapper">
   <div class="inner_content">
      <div class="pad45"></div>
      <!--info boxes-->
      <div class="row">
         <div class="span3">
            <div class="tile introboxes">
               <div class="intro-icon-disc cont-large"><i class="icon-film intro-icon-large dc-text-yellow"></i></div>
               <h6><small>WATCH</small></h6>
               <p>Join Dave, your friendly guide, in over 100 video music lessons, introducing how music works from the very beginning.</p>
               <a id="getstarted" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-yellow">Get Started</a>
            </div>
            <div class="pad25"></div>
         </div>
         <div class="span3">
            <div class="tile introboxes">
               <div class="intro-icon-disc cont-large"><i class="icon-star intro-icon-large dc-text-orange"></i></div>
               <h6><small>PRACTICE</small></h6>
               <p>Test your understanding as you go, with interactive exercises designed to enhance your awareness and sensitivity to music.</p>
               <?php if (Yii::app()->user->isGuest): ?>
               <a href="<?=bu();?>/login" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-orange">Sign in to track your progress</a>
               <? else:?>
               <a href="<?=bu();?>/profile" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-orange">View My Profile</a>
               <? endif;?>
            </div>
            <div class="pad25"></div>
         </div>
         <div class="span3">
            <div class="tile introboxes">
               <div class="intro-icon-disc cont-large"><i class="icon-info intro-icon-large dc-text-redorange"></i></div>
               <h6><small>ABOUT</small></h6>
               <p>Find out all about Dave Conservatoire; the story so far, where we hope to head in the future and how you can lend a hand.</p>
               <a href="<?=bu();?>/about" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-redorange">Find out more</a>
            </div>
            <div class="pad25"></div>
         </div>
         <div class="span3">
            <div class="tile introboxes">
               <div class="intro-icon-disc cont-large"><i class="icon-money  intro-icon-large dc-text-red"></i></div>
               <h6> <small>DONATE</small></h6>
               <p>Dave Conservatoire will be totally free forever.  Our dream is that no-one should miss out on having music in their life. </p>
               <a href="<?=bu();?>/donate" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-red">How you can help</a>
            </div>
            <div class="pad25"></div>
         </div>
      </div>
   </div>
</div>
<!--banner-->
<div id="courses">
<? foreach($courses as $course):
   $counter=0; ?>
<div class="banner">
   <div class="container intro_wrapper">
      <div class="inner_content">
         <div class="pad30"></div>
         <h1 class="title"><?=$course->title;?></h1>
         <h1 class="intro"><?=$course->description;?></h1>
      </div>
   </div>
</div>
<? if ($course->id != 8) : ?>
<div class="pad30"></div>
<div class="container wrapper">
   <div class="thumbnails tabbable">
      <ul class="courselist" style="width: 100%">
         <? foreach($course->topics as $topic): ?>
         <li class="span4 
            <? 
               if (!Yii::app()->user->isGuest) {
               if (in_array($topic->id,$videosviewedarray) || in_array($topic->id,$exercisesansweredarray)):?> 
            ribbon ribbon-inprogress 
            <? 
               endif;
               }?>" style="margin-bottom:5px">
            <a class="btn btn-large btn-block dc-btn-yellow" href="<?=bu();?>/topic/<?=$topic->urltitle;?>">
               <h3><?=$topic->title;?></h3>
            </a>
         </li>
         <? if($counter==3){ ?>
         <? $counter=1; } else { $counter++;} ?> 
         <? endforeach;?>
      </ul>
   </div>
</div>
<? else: ?>
<div class="pad30"></div>
<div class="container wrapper">
   <div class="tab-content">
      <div class="tab-pane active" id="topic-all">
         <div class="thumbnails">
	         <div class="row"  style="margin: 0 0 20px 0">
            <? 
               $counter=1; 
               foreach ($course->topics[0]->lessons as $lesson){
               
                ?>
            
               <div class='span2'>
                  <a href='<?=bu();?>/lesson/<?=$lesson->urltitle;?>' class='thumbnail vertical-shadow suggested-action'>
                     <?php if ($lesson->filetype == "l"): ?>
                     <img src='http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/default.jpg'/>
                     <?php elseif ($lesson->filetype == "p"): ?>
                     <img src='<?=bu();?>/img/playlist.jpg'/>
                     <?php elseif ($lesson->filetype == "e"): ?>
                     <img src='<?=bu();?>/img/exercise.jpg'/>
                     <? endif;?>
                     <p><?=$lesson->title;?></p>
                  </a>
               </div>
               <? if($counter==6){ ?>
            </div>
            <div class="row"  style="margin: 0 0 20px 0">
               <? $counter=1; } else { $counter++;} ?> 
               <? };?>	

            </div>
         </div>
      </div>
   </div>
</div>
   <? endif;?>
   <div class="pad30"></div>
   <? endforeach;?>
</div>