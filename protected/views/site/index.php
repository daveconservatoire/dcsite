<style>
.span2 {
	background-color: #fff;
	margin-bottom:20px; 

}

.span2 p {
	
	color: #000;
	padding: 10px;
}

.suggested-action .suggested-action-image-link {
background-size: cover;
background-repeat: no-repeat;
border-bottom: 10px solid #13967e;
display: block;
height: 200px;
margin: -14px -15px 22px;
overflow: hidden;
position: relative;
}

.suggested-action {
background-color: #f7f7f7;
color: #444!important;
display: block;
margin-bottom: 0;
padding: 14px;
height: 180px;
position: relative;
}
</style>

<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	
	<!--welcome-->

		<div class="welcome_index animated fadeInDown">
		Welcome to <span>Dave Conservatoire</span> - a free online music school, <br />aiming to provide a world-class music education for <span>everyone</span>.

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
			<div class="tile">
			<div class="intro-icon-disc cont-large"><i class="icon-film intro-icon-large dc-text-yellow"></i></div>
			<h6><small>WATCH</small></h6>
			<p>Join Dave, your friendly guide, in over 100 video music lessons, introducing how music works from the very beginning.</p>
			<a id="getstarted" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-yellow">Get Started</a>
			</div> 
				<div class="pad25"></div>
				</div> 
				
			<div class="span3">
				<div class="tile">
				<div class="intro-icon-disc cont-large"><i class="icon-star intro-icon-large dc-text-orange"></i></div>
				<h6><small>PRACTICE</small></h6>
				<p>Test your understanding as you go, with interactive exercises designed to enhance your awareness and sensitivity to music.</p>
				<a href="<?=bu();?>/login" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-orange">Sign in to track your progress</a>
				</div> 
					<div class="pad25"></div>
					</div> 
					
			<div class="span3">
				<div class="tile">
				<div class="intro-icon-disc cont-large"><i class="icon-info intro-icon-large dc-text-redorange"></i></div>
				<h6><small>ABOUT</small></h6>
				
				<p>Find out all about Dave Conservatoire; the story so far, where we hope to head in the future and how you can lend a hand.</p>	
				<a href="#" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-redorange">Find out more</a>
				</div> 
					<div class="pad25"></div>
					</div> 
				
			<div class="span3">
				<div class="tile">
				<div class="intro-icon-disc cont-large"><i class="icon-money  intro-icon-large dc-text-red"></i></div>
				<h6> <small>DONATE</small></h6>
				<p>Dave Conservatoire will be totally free forever.  Our dream is that no-one should miss out on having music in their life. </p>
				<a href="#" class="btn btn-primary  btn-custom btn-rounded btn-block dc-btn-red">How you can help</a>
				</div>
					<div class="pad25"></div>	
				</div> 
				</div> 
				
			<!--//info boxes-->
			<div class="row">
			<!--col 1-->
			<div class="span12">
			<div class="row">
			<div class="pad25 hidden-phone"></div>	
			
			<script type="text/javascript" src="<?=bu()."/js/jquery.carouFredSel-6.2.1-packed.js";?>"></script>

			
			<div class="span4">
			<h1>Latest Content</h1>
			<h4>Here are some of the latest lessons and exercises - why not jump in here if it looks interesting.</h4>
			<p>If there's something you'd like to know about but you can't find on the site then please let me know!</p>
			<a href="#" class="btn btn-primary  btn-custom  dc-btn-yellow">Request a lesson!</a>
		
			<div class="pad45"></div>
			</div>
			<!--column 2 slider-->
			<div class="span8 pad15 col_full2">
			
			<div id="slider_home">

<? foreach($newlessons as $lesson):?>
	       <div class="slider-item">	
				<div class="slider-image">
				
				<a href="<?=bu()."/lesson/".$lesson->urltitle;?>" >
					<img src="http://img.youtube.com/vi/<?=$lesson->youtubeid;?>/0.jpg" alt="" /></a>
				
				</div>
				<div class="slider-title">
				<h3><a href="#"><?=$lesson->title;?></a></h3>
			
				</div>
			</div>
			<? endforeach;?>
			
		
			
							</div>
				<div id="sl-prev" class="widget-scroll-prev"><i class="icon-chevron-left white"></i></div>
				<div id="sl-next" class="widget-scroll-next"><i class="icon-chevron-right white but_marg"></i></div>
			</div>
				</div>
				</div>
			</div>
		</div>
		<!--//page-->		<div class="pad25 hidden-desktop"></div>
	</div>

<? $counter=1;?>
	<!--banner-->




<?
// Getting the lessons for each course - would like to move this controller but not sure how!
$courses=Course::model()->findAll(array('order'=>'id DESC'));
$coursecounter = 0;
foreach($courses as $course): 
$course=Course::model()->findByPk($course->id);
$topics=Topic::model()->findAll("courseId=".$course->id ." ORDER BY sortorder");
$counter=1;

$colourarray =array("yellow", "orange", "orangered","red");
$this->pageTitle='Home | '.Yii::app()->name ;
?>


<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
<div class="pad30"></div>
	<h1 class="title"><?=$course->title;?></h1>
	<h1 class="intro"><?=$course->description;?></h1>
	</div>
	</div>
</div>	
<div class="pad30"></div>
<div class="container wrapper">
<div class="thumbnails tabbable">
<ul class="nav nav-tabs" style="width: 100%">

	<div class="row"  style="margin-left: 0px; margin-bottom: 10px">
		<? foreach($topics as $topic): ?>
		<div class='span4'>
		<li><a class="btn btn-large btn-block btn-primary dc-btn-<?=$colourarray[$coursecounter];?>" href="<?=bu();?>/topic/<?=$topic->urltitle;?>"><h3><?=$topic->title;?></h3></a></li>
         
		</div>
    <? if($counter==3){ ?>
	</div>
	<div class='row' style="margin-left: 0px;  margin-bottom: 10px">
    <? $counter=1; } else { $counter++;} ?> 
		<? endforeach;?>
	</ul>
	</div>
</div>
<div class="pad30"></div>
<? $coursecounter++;?>
<? endforeach;?>
	</div>
	</div>
	</div>