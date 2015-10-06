<?php
$this->breadcrumbs=array(
	'Tareas'=>array('index', 'pid'=>$model->project_id),
	'Crear Tarea',
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index', 'pid'=>$model->project_id)),
	array('label'=>'Administrar Tareas', 'url'=>array('admin', 'pid'=>$model->project_id)),
);
?>

<h1>Crear Tarea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>