<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>
       <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
       <?php echo $form->errorSummary($model); ?>
       <div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comentar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
