<?php 

namespace app/controllers; 

use yii; 
use yii\web\Controller; 
use app\model\Status;

class StatusController extends controller 
{ 
	public function actionCreate()
	{
		$model = new Status; 
		if($model->load(Yii::$app->request->post()) && $model->validate()){
			//Valid data recieved from model
			return $this->render('view', ['model' => $model]); 
		}else
		{
//page is intially displayed or some validation error is thrown.
			return $this->render('create', ['model' => $model]);
		}
	}	
}
?>