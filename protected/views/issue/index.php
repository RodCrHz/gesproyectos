<?php
$this->breadcrumbs=array(
	'Tareas',
);

$this->menu=array(
	//array('label'=>'Manage Issue', 'url'=>array('admin')),
);
?>

<h1>Tareas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
