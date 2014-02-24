<?php

class ExerciseController extends Controller {


	public function actionView($urltitle)
	{
	   include('exercises/exercises/'.$urltitle.'.html');
	    //$this->render('exercise',array('exinfo'=>$urltitle));
 
	}
	



}


?>