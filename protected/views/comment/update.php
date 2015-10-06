<?php
$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Comentarios', 'url'=>array('index')),
	//array('label'=>'Crear Comment', 'url'=>array('create')),
	array('label'=>'Ver Comentario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar comentario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>