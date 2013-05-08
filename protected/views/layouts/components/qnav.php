    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
  
          <a class="brand" href="http://www.daveconservatoire.org"><?php echo CHtml::encode(Yii::app()->name); ?></a>
          <div class="nav-collapse">
    		<ul class="nav" id="mainmenu">
<li><a href="/questions" class="active">Ask Questions</a></li>
<li><a href="/support" class="active">Support</a></li>
<li><a href="/site/about">About</a></li>
<li><a href="/site/contact">Contact</a></li>


</ul>	
		<p class='navbar-text pull-right'>
		<?php 
		if(Yii::app()->user->isGuest) {echo "<a class='btn' style='margin-top: 0px' href='/site/login'>Login</a>";}
		else { echo "<a class='btn' style='margin-top: 0px' href='/site/logout'>Logout (".Yii::app()->user->name.")</a>";}
		?>
	</p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>