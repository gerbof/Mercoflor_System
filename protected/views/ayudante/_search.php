<?php
/* @var $this AyudanteController */
/* @var $model Ayudante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idayudante'); ?>
		<?php echo $form->textField($model,'idayudante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dni'); ?>
		<?php echo $form->textField($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomyape'); ?>
		<?php echo $form->textField($model,'nomyape',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idusuario_ayudante'); ?>
		<?php echo $form->textField($model,'idusuario_ayudante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->