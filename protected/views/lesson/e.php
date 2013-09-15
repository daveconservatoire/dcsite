 <?

  $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile(bu().'/js/lowlag.js');
  $cs->registerScriptFile(bu().'/js/soundmanager2.js');
 

  
  ?>
  
 

		<div class="container wrapper">
		<div class="inner_content">

<? $this->renderPartial("//layouts/components/sidebar", array('model'=>$model));?>
				
						
<div style="text-align:center;">			
<div id="starterdiv">					
<h1 id="starter">Exercise Loading . . .Please Wait</h1>
<h1 id="starter">Don't forget to turn up your volume!</h1>
<img src="<? echo bu();?>/img/ajax-loader.gif" />
</div>
</div>
 <div class="single-exercise visited-no-recolor" id="container" style="overflow: hidden; visibility: hidden">
                        <article class="exercises-content clearfix">
             
                        <div class="exercises-body">
                            <div class="exercises-stack">&nbsp;</div>
                            <div class="exercises-card current-card">
                                <div class="current-card-container card-type-problem">
                                    <div class="current-card-container-inner vertical-shadow">
                                        <div class="current-card-contents">
                                        <div id="exercise-message-container" style="display: none;">
    <div class="exercise_message"></div>
</div>

<div id="problem-and-answer">
    <div id="problemarea">
        <div id="scratchpad"><div></div></div>
        <div id="workarea"></div>
        <div id="hintsarea"></div>
    </div>
    <div id="answer_area_wrap"><div id="answer_area">
        <form id="answerform" name="answerform">
            <input style="position: absolute; left: -9999px; width: 1px; height: 1px" type="submit">
            <div class="info-box" id="answercontent">
                <span id="examples-show">Acceptable formats</span>
                <span class="info-box-header">Answer</span>
                <div class="fancy-scrollbar" id="solutionarea"></div>
                <ul id="examples" style="display: none"></ul>
                <div class="answer-buttons">
                <div class="check-answer-wrapper">
                    <input class="simple-button green" id="check-answer-button" type="button" value="Check Answer">
                </div>
                <input class="simple-button green" id="next-question-button" name="correctnextbutton" style="display:none;" type="button" value="Correct! Next Question...">
                <div id="positive-reinforcement"><img src="/images/face-smiley.png" ></div>
                <span id="show-solution-button-container"></span>
                <div id="check-answer-results"><p class="check-answer-message info-box-sub-description"></p></div>
                </div>
            </div>
            <div class="info-box" id="readonly">
                <span class="info-box-header" id="readonly-problem"></span>
                <span class="info-box-subheader" id="readonly-title">You are viewing a problem.</span>
                <span class="info-box-sub-description">To work on problems like this, <a href="" id="readonly-start">start this exercise</a>.</span>
            </div>
            <div class="info-box hint-box">
                <span class="info-box-header">Need help?</span>
                <div id="get-hint-button-container">
                    <input class="simple-button orange full-width" id="hint" name="hint" type="button" value="I'd like a hint">
                </div>
                <span id="hint-remainder"></span>
            </div>
            <div class="info-box related-video-box" style="display:none;">
                <div id="related-video-content">
                    <span class="info-box-header">Stuck? Watch a video.</span>

                    <div id="related-video-list">
                        <span class="related-content-title">Related videos:</span>
                        <ul class="related-video-list"></ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </form>
        <div class="info-box" id="calculator" style="display: none;">
            <span class="info-box-header">Calculator</span>
            <div class="calculator">
                <div class="history fancy-scrollbar">
                    <div class="calc-row input"><input type="text"><div class="status"><a href="#" data-behavior="angle-mode"><br>DEG</a></div></div>
                </div>
                <div class="keypad">
                    <div class="calc-row">
                    <a href="#" data-text="asin(">sin<sup>-1</sup></a><a href="#" data-text="acos(">cos<sup>-1</sup></a><a href="#" data-text="atan(">tan<sup>-1</sup></a><a href="#" data-behavior="bs">del</a><a href="#" class="dark" data-behavior="clear">ac</a>
                    </div>
                    <div class="calc-row">
                    <a href="#" data-text="sin(">sin</a><a href="#" data-text="cos(">cos</a><a href="#" data-text="tan(">tan</a><a href="#" data-text="sqrt(">?</a><a href="#" data-text="^">x<sup>y</sup></a>
                    </div>
                    <div class="calc-row">
                    <a href="#" class="dark">7</a><a href="#" class="dark">8</a><a href="#" class="dark">9</a><a href="#">(</a><a href="#">)</a>
                    </div>
                    <div class="calc-row">
                    <a href="#" class="dark">4</a><a href="#" class="dark">5</a><a href="#" class="dark">6</a><a href="#" data-text="*">?</a><a href="#" data-text="/">÷</a>
                    </div>
                    <div class="calc-row">
                    <a href="#" class="dark">1</a><a href="#" class="dark">2</a><a href="#" class="dark">3</a><a href="#">+</a><a href="#" data-text="-">?</a>
                    </div>
                    <div class="calc-row">
                    <a href="#" class="dark">0</a><a href="#" class="dark">.</a><a href="#" data-text="ans">ans</a><a href="#" class="wide" data-behavior="evaluate">=</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-box" id="issue" style="display:none;">
            <span class="info-box-header">Report a Problem</span>
            <span class="info-box-sub-description" id="issue-status"></span>
            <form>
                <fieldset>
                    <legend>Issue Type</legend>
                    <ul>
                        <li>
                            <input id="issue-wrong-or-unclear" name="issue-type" type="radio">
                            <label for="issue-wrong-or-unclear">Answer is wrong or question is unclear</label>
                        </li>
                        <li>
                            <input id="issue-hard" name="issue-type" type="radio">
                            <label for="issue-hard">I'm frustrated (tell us why) or this is too hard</label>
                        </li>
                        <li>
                            <input id="issue-not-showing" name="issue-type" type="radio">
                            <label for="issue-not-showing">I can't see the problem or website is stuck</label>
                        </li>
                        <li>
                            <input id="issue-other" name="issue-type" type="radio">
                            <label for="issue-other">Other (please describe below)</label>
                        </li>
                    </ul>
                </fieldset>
                <label for="issue-title">Issue Title:<input id="issue-title" name="issue-title" type="text"></label>
                <label for="issue-body">Description of Issue:<textarea id="issue-body" name="issue-body"></textarea></label>
                <input class="simple-button" type="submit" value="Submit Issue">
                <a href="/#" id="issue-cancel">Cancel</a>
                <img id="issue-throbber" name="issue-throbber" style="display:none;">
            </form>
        </div>
    </div></div>
    <div style="clear: both;"></div>
</div>

                                        </div>
                                    </div>
                                    <!--
                                    <div class="single-exercise" id="extras">
                                        <ul>
                                            <li> <a href="" id="scratchpad-show" style="">Show scratchpad</a>
                                                <span id="scratchpad-not-available" style="display: none;">Scratchpad not available</span>
                                            </li>
                                            <li class="debug-mode"> <a href="?debug">Debug mode</a></li>
                                            <li> <a href="" id="problem-permalink">Problem permalink</a></li>
                                        </ul>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
                  
                    <div class="badge-award-container" id="badge-notification-container" style="display:none;"></div>
        </div>
    </div>

    <div class="push"></div>

    

</div>


<!-- Here begins the KA exercise code -->

<script src="<? echo Yii::app()->request->baseUrl;?>/js/khan-exercise.js"></script>

<? 

$end = end((explode('/', $_SERVER['REQUEST_URI'])));


if (substr($_SERVER['DOCUMENT_ROOT'],-1)=="_") {
$address=substr($_SERVER['DOCUMENT_ROOT'],0,-2);
} else {
	$address=$_SERVER['DOCUMENT_ROOT'];
}

include($address.bu()."/exercises/".$end.".html");

?>
    <!-- End exercise code -->

					</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	<!--//page-->