<?
mysql_connect("localhost", "daverees4_con", "owzats11") or die(mysql_error());
mysql_select_db("daverees4_con") or die(mysql_error());

$extitle=$_GET[url];




if(isset($_GET[id])){
$query="SELECT * FROM Lesson WHERE urltitle = '".$urltitle."'";
}
if(isset($extitle)){
$query="SELECT * FROM Lesson WHERE youtubeid = '".$extitle."'";
}


$result = mysql_query($query) 
or die(mysql_error());  




while($row = mysql_fetch_array( $result )) {

$videoid=$row['id'];
$lessontitle = $row['title'];
$seriesno = $row['seriesno'];
$lessonno = $row['lessonno'];
$youtubeid = $row['youtubeid'];
$filetype = $row['filetype'];

}



if ($filetype=="p"){

$query="SELECT * FROM playlist WHERE relid = '".$videoid."'";

$result = mysql_query($query) 
or die(mysql_error());  




while($row = mysql_fetch_array( $result )) {

$playlistvids[]= $row['youtubeid'];
$playlisttitles[]=$row['title'];
$playlisttext[]=$row['text'];
$playlistcredit[]=$row['credit'];

}
}



$query="SELECT * FROM Course WHERE id = '".$seriesno."'";

$result = mysql_query($query) 
or die(mysql_error());  


while($row = mysql_fetch_array( $result )) {

$seriestitle = $row['title'];
}

$nextvideo=($lessonno+1);



$query="SELECT * FROM Lesson WHERE seriesno = '".$seriesno."' AND lessonno = '".$nextvideo."'";

$result = mysql_query($query) 
or die(mysql_error());  


while($row = mysql_fetch_array( $result )) {

$nexttitle=$row['title'];
$nextfiletype=$row['filetype'];
if($nextfiletype=="p" || $nextfiletype=="l"){
$nexturl="http://www.daveconservatoire.org/lesson/".$row['urltitle'];
}

if ($nextfiletype=="e"){
$nexturl="http://www.daveconservatoire.org/exercise/".$row['youtubeid'];
}
}

$prevvideo=($lessonno-1);



$query="SELECT * FROM Lesson WHERE seriesno = '".$seriesno."' AND lessonno = '".$prevvideo."'";

$result = mysql_query($query) 
or die(mysql_error());  


while($row = mysql_fetch_array( $result )) {

$prevtitle=$row['title'];
$prevfiletype=$row['filetype'];
if($prevfiletype=="p" || $prevfiletype=="l"){
$prevurl="http://www.daveconservatoire.org/lesson/".$row['urltitle'];
}

if ($prevfiletype=="e"){
$prevurl="http://www.daveconservatoire.org/exercises/exercises/".$row['youtubeid'].".html";
}
}








$pagetitle=$lessontitle;

?>