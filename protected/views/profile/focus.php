<div class="container wrapper">
   <div class="inner_content">
   <div style="height:13px"></div>		
<div class="row">
	<div class="span2" >
	   <? $this->renderPartial("//layouts/components/profilesidebar");?>
	</div>
	<div class="span10">
<?php $this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
        'title' => array('text' => "Your Focus"),
        'credits' => array('enabled' => false),
        'series' => array( array (
            'type' => 'pie',
           'name'=>'Focus',
            'data' => $data),
        ),
        'dataLabels'=>array('enabled'=> true, 'color'=> '#000000', 'connectorColor'=> '#000000', 'format'=>'<b>{point.name}</b>: {point.percentage:.1f} %'),
         'tooltip' => array('pointFormat'=>'{series.name}: <b>{point.percentage:.1f}%</b>'),
                
   )
));

?>

	</div>
</div>
   </div>
</div>