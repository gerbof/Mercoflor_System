<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableClientValidation'=>true,
	//'clientOptions'=>array('validateOnSubmit'=>true,),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos resaltados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomyape'); ?>
		<?php echo $form->textField($model,'nomyape',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomyape'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>60, 'disabled'=>true)); ?>
		<?php echo $form->error($model,'razon_social'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->hiddenField($model,'idperfil_usuario'); ?>
		<?php echo $form->error($model,'idperfil_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'condicion_impositiva'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'nrosocio'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Registrarme'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->