<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<? echo Yii::app()->request->baseUrl;?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
			<div class="navbar">
				<ul class="nav" id="mainmenu">
					
					<li class="dropdown"><a href="#tools"class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<? echo Yii::app()->request->baseUrl;?>/tools/scales" class="active">Scale Dictionary</a></li>
						<li><a href="<? echo Yii::app()->request->baseUrl;?>/tools/chords">Chord Dictionary</a></li>
					</ul>
					</li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/officehours" class="active">Virtual Office Hours</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/support" class="active">Support</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/about">About</a></li>
					<li><a href="<? echo Yii::app()->request->baseUrl;?>/site/contact">Contact</a></li>
				</ul>
				<p class='navbar-text pull-right'>
				<?php if (Yii::app()->user->isGuest): ?>
					<a class='btn' style='margin-top: 0px; padding: 0px' href='https://www.facebook.com/pages/Dave-Conservatoire/199558400134104'><img src="<? echo Yii::app()->request->baseUrl;?>/style/img/facebook_icon.png"/></a>
					<a class='btn' style='margin-top: 0px; padding: 0px' href='https://twitter.com/intent/user?original_referer=http%3A%2F%2Fplatform.twitter.com%2Fwidgets%2Ffollow_button.1335513764.html&region=follow&screen_name=dconservatoire&source=followbutton&variant=2.0'><img src="<? echo Yii::app()->request->baseUrl;?>/style/img/twitter_icon.png"/></a>
					<a class='btn' style='margin-top: 0px' href='<? echo Yii::app()->request->baseUrl; ?>/site/login'>Login</a>
				</p>
				<?php else: ?>
				
				<div class="btn-group pull-right">
				    
					<a class="btn btn-success" href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-user icon-white"></i> <? echo Yii::app()->user->name;?></a>
					<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#profilemenu"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<? echo Yii::app()->request->baseUrl; ?>/profile"><i class="icon-pencil"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<? echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="icon-share-alt"></i>Logout</a></li>
					</ul>
				</div>
				<? $user=User::model()->findByPk(Yii::app()->user->dcid);?>
				<span id="points" class="badge pull-right" style="margin: 9px 5px"><?=$user->points;?></span>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>