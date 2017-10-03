<?php
/* @var $this EspecieIngresadaController */
/* @var $model EspecieIngresada */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idesp_ing'); ?>
		<?php echo $form->textField($model,'idesp_ing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idingreso_esp_ing'); ?>
		<?php echo $form->textField($model,'idingreso_esp_ing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idespecie_esp_ing'); ?>
		<?php echo $form->textField($model,'idespecie_esp_ing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->