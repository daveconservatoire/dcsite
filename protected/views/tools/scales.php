<?
$this->pageTitle="Scale Dictionary | "."Dave Conservatoire";
?>

<div class="container wrapper">
	<div class="inner_content">
	<div class="pad30"></div>
<h2>Scale Dictionary</h2>
<p>Here you can look up all the major and minor scales.  Don't know what a scale is?  Then look <a href="http://daveconservatoire.org/lesson/major-scales">here</a>.  Otherwise enjoy exploring - I've even thrown in some bonus wholetone and diminished scales for you to try!</p>
<div id="keyboard"></div>
<div id="keyboardspacer"></div>
      <form class="form-horizontal">
        <fieldset>

          <div class="control-group">
            <div class="row">
  <div class="span6">
            <label class="control-label" for="pitchselect">Pitch</label>
            <div class="controls">
              <select id="pitchselect">
                <option value="0" default>C</option>
                <option value="1">C#/Db</option>
                <option value="2">D</option>
                <option value="3">D#/Eb</option>
                <option value="4">E</option>
                 <option value="5">F</option>
                <option value="6">F#/Gb</option>
                <option value="7">G</option>
                <option value="8">G#/Ab</option>
                <option value="9">A</option>
                <option value="10">A#/Bb</option>
                <option value="11">B</option>
          
   
                
              </select>
            </div>
            </div>
            <div class="span6">
            
                    <label class="control-label" for="scaleselect">Scale</label>
            <div class="controls">
              <select id="scaleselect">
                <option value="0" default>Major</option>
                <option value="1">Natural Minor</option>
                <option value="2">Harmonic Minor</option>
                 <option value="3">Wholetone Scale</option>
                 <option value="4">Diminished Scale</option>
                 <option value="11">Ionian Mode (major scale)</option>
                 <option value="12">Dorian Mode</option>
                 <option value="13">Phrygian Mode</option>
                 <option value="14">Lydian Mode</option>
                 <option value="15">Mixolydian Mode</option>
                 <option value="16">Aeolian Mode (natural minor)</option>
                 <option value="17">Locrian Mode</option>
        
        
        
        
        
              </select>
              </div>
            </div>
            </div>
          </div>

        </fieldset>
      </form>
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/script/soundmanager2.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/keyboard.js" /></script>
    
    </div></div>