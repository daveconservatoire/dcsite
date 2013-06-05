<?php
class SearchController extends Controller
{
  public function actionIndex() {
  
  if(isset($_GET['searchquery'])){
  
$check=SearchTerm::model()->countByAttributes(array('term'=>$_GET['searchquery']));

if ($check==0){
	
	$searchterm= new SearchTerm;
    $searchterm->term=$_GET['searchquery'];
	$searchterm->save();
}

else {
	
	$searchterm=SearchTerm::model()->findByAttributes(array('term'=>$_GET['searchquery']));
	$searchterm->frequency++;
	$searchterm->save();
}

  
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