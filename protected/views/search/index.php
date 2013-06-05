<h1>Search</h1>
<hr />

<form class="form-search" method="get" action="<? echo Yii::app()->request->baseUrl;?>/search">
  <input type="text" name="searchquery" class="input-xxlarge search-query topsearch" placeholder="
  <? if (isset($_GET['searchquery'])){ echo $_GET['searchquery'];} else {echo "Enter your search term here";}?>
  
  ">
  <button type="submit" class="btn"><i class="icon-search"></i> Search</button>
</form>
<hr />

<? if(isset($results) && $_GET['searchquery'] !=""):?>




<? foreach ($results as $result):?>
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

<? endif; ?>