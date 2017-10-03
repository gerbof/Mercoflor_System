<?php
/* @var $this EspecieController */
/* @var $model Especie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idespecie'); ?>
		<?php echo $form->textField($model,'idespecie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_vulgar'); ?>
		<?php echo $form->textField($model,'nom_vulgar',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_cientifico'); ?>
		<?php echo $form->textField($model,'nom_cientifico',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idhabitat_especie'); ?>
		<?php echo $form->textField($model,'idhabitat_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idregion_especie'); ?>
		<?php echo $form->textField($model,'idregion_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idepoca_especie'); ?>
		<?php echo $form->textField($model,'idepoca_especie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idtipo_especie'); ?>
		<?php echo $form->textField($model,'idtipo_especie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->