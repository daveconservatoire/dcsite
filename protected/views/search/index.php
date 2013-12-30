<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">

	<h1 class="title">Search</h1>
	

	</div>
		</div>
			</div>


				<div class="container wrapper">
	<div class="inner_content">

<form class="form-search" method="get" action="<? echo Yii::app()->request->baseUrl;?>/search">

<div class="input-append  input-block-level">
  <input type="text" name="searchquery" class="input-xxlarge search-query topsearch " 
  <? if (isset($_GET['searchquery'])){ echo "value='".$_GET['searchquery']."'";} else {echo "placeholder='Enter your search term here'";}?>"  />
    <button type="submit" class="btn">Search</button>
  </div>



</form>
<hr />

<? if(isset($results) && $_GET['searchquery'] !=""):?>




<? 
$empty=false;
foreach ($results as $result):
$empty=true;
?>

<div class="row">

<div class="span7">
<h3><a href="<? echo Yii::app()->request->baseUrl;?>"><?= $result->title;?></a></h3>
<br />
<? if($result->description!=""):?>
<p><? echo nl2br($result->description);?></p>
<? endif;?>
<br />
<? if($result->filetype=="l"):?>

 <a class="btn btn-primary btn-success" type="button" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?= $result->urltitle;?>">View Lesson</a>
<? elseif($result->filetype="e"):?>

 <a class="btn btn-primary btn-success" type="button" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?= $result->urltitle;?>">View Playlist</a>
<? elseif($result->filetype="p"):?>

 <a class="btn btn-primary btn-success" type="button" href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?= $result->urltitle;?>">Try Exercise</a>
<? endif;?>

<a href="<? Yii::app()->request->baseUrl;?>"></a>
</div>
<div class="span2 offset3">
<? if($result->filetype=="l"):?>
<a href="<? echo Yii::app()->request->baseUrl;?>/lesson/<?= $result->urltitle;?>"><img class="img-polaroid" src="http://img.youtube.com/vi/<?= $result->youtubeid;?>/default.jpg" /></a>

<? elseif($result->filetype="e"):?>
<a href="<? echo Yii::app()->request->baseUrl;?>"><img class="img-polaroid" src="<? echo Yii::app()->request->baseUrl;?>/images/exercise.jpg" /></a>

<? elseif($result->filetype="p"):?>
<a href="<? echo Yii::app()->request->baseUrl;?>"><img class="img-polaroid" src="<? echo Yii::app()->request->baseUrl;?>/images/playlist.jpg" /></a>

<? endif;?>
</div>
</div>
<hr />
<? endforeach;?>

<? if(!$empty):?>
<h4>No Results Found</h4>
<br />
<p>D'oh.  Looks like I haven't made any resources on this topic yet.  Perhaps there might be something interesting on the <a href="<? echo Yii::app()->request->baseUrl;?>">homepage</a>, or you might like to <a href="<? echo Yii::app()->request->baseUrl;?>/site/contact">send me an email</a> to ask me to make what you need.</p>
<? endif;?>  

<? endif; ?>

	</div></div>