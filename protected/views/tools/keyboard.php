<?
$this->pageTitle="Chord Dictionary | "."Dave Conservatoire";
?>

<h2>Interactive Keyboard</h2>
<p>Here's a keyboard for you to explore - you can click on any note to hear it play.  Try comparing notes at the bottom with notes at the top.  Why not try and find two notes an octave apart and compare their sound?</p>
<div id="keyboard"></div>
<div id="keyboardspacer"></div>
       
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/script/soundmanager2.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/keyboard.js" /></script>
