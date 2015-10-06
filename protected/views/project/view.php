	<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Proyectos', 'url'=>array('index')),
	array('label'=>'Crear Proyectos', 'url'=>array('create')),
	array('label'=>'Actualizar Proyectos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borrar este proyecto?')),
	array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
	array('label'=>'Crear Tarea', 'url'=>array('issue/create', 'pid'=>$model->id)),
);

if(Yii::app()->user->checkAccess('createUser',array('project'=>$model)))
{
	$this->menu[] = array('label'=>'Add User To Project', 'url'=>array('adduser', 'id'=>$model->id));
}

?>

<h1>Vista del Proyecto <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>

<br />
<h1>Tareas del proyecto</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$issueDataProvider,
	'itemView'=>'/issue/_view',
)); ?>

<?php 
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>'Ultimos comentarios de este proyecto',
	));  
	
	$this->widget('RecentCommentsWidget', array('projectId'=>$model->id));

	$this->endWidget(); 
?>


