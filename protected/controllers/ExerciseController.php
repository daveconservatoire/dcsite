<?php

class ExerciseController extends Controller {



	public function actionView($urltitle)
	{
	   include('exercises/exercises/'.$urltitle.'.html');
	    //$this->render('exercise',array('exinfo'=>$urltitle));
 
	}
	
	public function actionTest($urltitle) {
	    $this->layout='exercises';
	    $this->render('exercise');
		//include('exercises/exercises/'.$urltitle.'.html');
	}



}


?>