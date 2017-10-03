<?php
/* @var $this EspecieController */
/* @var $model Especie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'especie-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_vulgar'); ?>
		<?php echo $form->textField($model,'nom_vulgar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_vulgar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_cientifico'); ?>
		<?php echo $form->textField($model,'nom_cientifico',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_cientifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idhabitat_especie'); ?>
		<?php echo $form->textField($model,'idhabitat_especie'); ?>
		<?php echo $form->error($model,'idhabitat_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idregion_especie'); ?>
		<?php echo $form->textField($model,'idregion_especie'); ?>
		<?php echo $form->error($model,'idregion_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idepoca_especie'); ?>
		<?php echo $form->textField($model,'idepoca_especie'); ?>
		<?php echo $form->error($model,'idepoca_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idtipo_especie'); ?>
		<?php echo $form->textField($model,'idtipo_especie'); ?>
		<?php echo $form->error($model,'idtipo_especie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->