<?
$lessons=Lesson::model()->findAll();
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"> 
        
 <? foreach ($lessons as $lesson):?>
   <url> 
     <loc>http://www.daveconservatoire.org/lesson/<?= $lesson->urltitle;?></loc>
     <video:video>
       <video:thumbnail_loc>http://img.youtube.com/vi/<?= $lesson->youtubeid;?>/default.jpg</video:thumbnail_loc> 
       <video:title><?= $lesson->title;?></video:title>
       <video:description>
       <? if ($lesson->description==""):
           echo "A free lesson from Dave Conservatoire (www.daveconservatoire.org) called ".$lesson->title;
         else:
         echo $lesson->description;
         endif;
         ?></video:description>
       <video:player_loc allow_embed="yes" autoplay="ap=0">
        http://www.youtube.com/v/<?=$lesson->youtubeid;?></video:player_loc>
       <video:uploader info="http://www.daveconservatoire.org">Dave Conservatoire
         </video:uploader>
       <video:live>no</video:live>
     </video:video> 
   </url> 
 <? endforeach; ?>
</urlset>