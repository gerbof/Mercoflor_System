<?php
/* @var $this AyudanteController */
/* @var $model Ayudante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ayudante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni'); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomyape'); ?>
		<?php echo $form->textField($model,'nomyape',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomyape'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idusuario_ayudante'); ?>
		<?php echo $form->textField($model,'idusuario_ayudante'); ?>
		<?php echo $form->error($model,'idusuario_ayudante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->