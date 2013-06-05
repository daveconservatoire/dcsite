<?php
class SearchController extends Controller
{
  public function actionIndex() {
  
  if(isset($_GET['searchquery'])){
  
$q = new CDbCriteria();
$q->addSearchCondition('title', $_GET['searchquery'], true, 'OR', "LIKE");
$q->addSearchCondition('description', $_GET['searchquery'], true, 'OR', "LIKE");
$q->addSearchCondition('keywords', $_GET['searchquery'], true, 'OR', "LIKE");
 
$results= Lesson::model()->findAll( $q );
	  $this->render('index', array('results'=>$results));	  
  }
  else {
	  
	  $this->render('index');
  }
  }
}