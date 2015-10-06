<?php
$this->breadcrumbs=array(
	'Tareas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index', 'pid'=>$model->project->id)),
	array('label'=>'Crear Tarea', 'url'=>array('create', 'pid'=>$model->project->id)),
	array('label'=>'Ver Tarea', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Tareas', 'url'=>array('admin', 'pid'=>$model->project->id)),
);
?>

<h1>Actualizar Tarea<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>