<?php
$this->breadcrumbs=array(
	'Comentarios',
);

$this->menu=array(
		array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Comentarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
