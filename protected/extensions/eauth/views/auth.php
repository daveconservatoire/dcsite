<div class="services">
  <div class="auth-services row">
  <?php
	foreach ($services as $name => $service) {
		echo '<div style="height: 100px" class="span4 suggested-action vertical-shadow '.$service->id.'">';
		$html = '<span class="auth-title">Login with '.$service->title.'</span>';
		$html .= '<span class="auth-icon '.$service->id.'"><i></i></span>';
		
		$html = CHtml::link($html, array($action, 'service' => $name), array(
			'class' => 'auth-link '.$service->id,
		));
		echo $html;
		echo '</div>';
	}
  ?>
  </div>
</div>