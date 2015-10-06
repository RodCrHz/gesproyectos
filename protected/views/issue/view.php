<?php
$this->breadcrumbs=array(
	$model->project->name=>array('project/view', 'id'=>$model->project->id),
	'Tareas'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Tareas', 'url'=>array('index', 'pid'=>$model->project->id)),
	array('label'=>'Crear Tareas', 'url'=>array('create', 'pid'=>$model->project->id)),
	array('label'=>'Actualizar Tarea', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Tarea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de borrar este proyecto?')),
	array('label'=>'Administrar Tareas', 'url'=>array('admin', 'pid'=>$model->project->id)),
);

?>

<h1>Vista de la tarea <?php echo $model->name; ?></h1>

	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
			'description',
			array(        
				'name'=>'type_id',
	    		'value'=>CHtml::encode($model->getTypeText())
			),
			array(        
				'name'=>'status_id',
		    	'value'=>CHtml::encode($model->getStatusText())
			),
			array(        
				'name'=>'owner_id',
				 'value'=>isset($model->owner)?CHtml::encode($model->owner->username):"unknown"
		    		
			),
			array(        
				'name'=>'requester_id',
		    	'value'=>isset($model->requester)?CHtml::encode($model->requester->username):"unknown"
			),

		),
	)); ?>

   <div id="comments">
		<?php if($model->commentCount>=1): ?>
			<h3>
				<?php echo $model->commentCount>1 ? $model->commentCount . ' comentarios' : 'Un Comentario'; ?>
			</h3>

			<?php $this->renderPartial('_comments',array(
				'comments'=>$model->comments,
			)); ?>
		<?php endif; ?>

		<h3>Deja un Comentario</h3>

		<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
			</div>
		<?php else: ?>
			<?php $this->renderPartial('/comment/_form',array(
				'model'=>$comment,
			)); ?>
		<?php endif; ?>

	</div>
