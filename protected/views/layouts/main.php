<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <meta name="description" content="<?php echo CHtml::encode($this->extraDesc); ?>Dave Conservatoire offers free lessons and interactive exercises on music theory." />
        <meta name="keywords" content="<?php echo CHtml::encode($this->extraKeywords); ?>free music lessons, free music theory, open learning, music history, music notation lessons" />

        <meta property="fb:page_id" content="199558400134104" />
        <meta property="og:title" content="Dave Conservatoire"/>
        <meta property="og:type" content="non_profit"/>
        <meta property="og:site_name" content="daveconservatoire.org"/>

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/keyboard/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/style/css/bootstrap.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      
           .span3 {
      background-color: whiteSmoke;
      text-align: center;
     
      }
      
      .row {     
      padding-bottom: 20px;
      }


    </style>
    
        <!-- Le javascript
    ================================================== -->
   
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/style/js/bootstrap.js"></script>
     <script src="<?php echo Yii::app()->request->baseUrl; ?>/style/js/functions.js"></script>

    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons NEEDED -->
   
  </head>

<body>

<? include('components/nav.php');?>


<div class="container" id="page">


	<?php echo $content; ?>

      <!-- Example row of columns -->

<? include('components/footer.php');?>

    </div> <!-- /container -->
<!-- modal box for alerts -->


<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3 id="modal-title"></h3>
  </div>
  <div class="modal-body">
    <p id="modal-text"></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  
  </div>
</div>

<!-- end modal -->

  </body>
</html>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6437471-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


