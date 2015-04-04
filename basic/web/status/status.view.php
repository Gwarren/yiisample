<?php 
  use yii\helpers\Html; 
?> 

<h1>Your status Update</h1>
<p><label>Text</label>:</p>
	<?= Html::encode($model->text) ?> 
	<br /><nr /> 
<p><label>Permissions</label>:</p>
<?php 
echo $model->getPermissionsLabel($model->permissions); 
?>