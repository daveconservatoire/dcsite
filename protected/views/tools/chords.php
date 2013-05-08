<?
$this->pageTitle="Chord Dictionary | "."Dave Conservatoire";
?>

<h2>Chord Dictionary</h2>
<p>Here you can look up all of the basic major and minor triads.  Don't know what a triad is?  Then look <a href="http://daveconservatoire.org/lesson/what-is-harmony">here</a>.  Otherwise enjoy exploring!</p>
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
            
                    <label class="control-label" for="scaleselect">Chord</label>
            <div class="controls">
              <select id="scaleselect">
                <option value="5" default>Major Triad (root position)</option>
                <option value="6">Major Triad (first inversion)</option>
                <option value="7">Major Triad (second inversion)</option>
                 <option value="8">Minor Triad (root position)</option>
                 <option value="9">Minor Triad (first inversion)</option>
                 <option value="10">Minor Triad (second inversion)</option>
        
              </select>
              </div>
            </div>
            </div>
          </div>

        </fieldset>
      </form>
      
   <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/script/soundmanager2.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/keyboard.js" /></script>
