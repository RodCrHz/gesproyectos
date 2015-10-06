<?php
$this->breadcrumbs=array(
	'Proyectos',
);

$this->menu=array(
	array('label'=>'Crear Proyectos', 'url'=>array('create')),
	array('label'=>'Administrar Proyectos', 'url'=>array('admin')),
);
?>

<h1>Proyectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php 
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>'Comentarios Recientes',
	));  

	$this->widget('RecentCommentsWidget');

	$this->endWidget(); 
?>

