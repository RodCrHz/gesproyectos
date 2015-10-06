<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Comentarios', 'url'=>array('index')),
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
	array('label'=>'Actualizar Comentario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Comentario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borrar este comentario?')),
	array('label'=>'Administrar Comentario', 'url'=>array('admin')),
);
?>

<h1>Vista del Comentario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'issue_id',
		'create_time',
		array(        
				'name'=>'create_user_id',
				 'value'=>isset($model->pertenece)?CHtml::encode($model->pertenece->username):"desconocido"
		    		
			),
		'update_time',
		array(        
				'name'=>'update_user_id',
				 'value'=>isset($model->pertenece)?CHtml::encode($model->pertenece->username):"desconocido"
		    		
			),
		
			),
)); ?>
