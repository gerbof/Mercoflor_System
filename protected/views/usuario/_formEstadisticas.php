<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadisticas-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true,),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos resaltados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaDesde'); ?>

		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'fechaDesde',
				'model' => $model,
				'attribute' => 'fechaDesde',
				'language' => 'es',			
		 				
				'options'=>array(
					'showAnim'=>'slide',
					'showButtonPanel'=>true,
					'dateFormat' => 'yy-mm-dd',
				),
				'htmlOptions'=>array(
					'style'=>'',
					'readonly'=>"readonly",
					'value' => '2013-12-01'
				),
			));
		?>
		

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaHasta'); ?>
		<?php //echo $form->textField($model,'fechaHasta',array('size'=>13,'maxlength'=>13)); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'name'=>'fechaHasta',
				'model' => $model,
				'value'=>date('Y-m-d'),   
				'attribute' => 'fechaHasta',
				'language' => 'es',
				'options'=>array(
					'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
					'showButtonPanel'=>true,
					'dateFormat' => 'yy-mm-dd',
				),
				'htmlOptions'=>array(
					'style'=>'',
					'readonly'=>"readonly",
					'value' => date('Y-m-d')
				),
			));
		?>
		
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Ver grafico'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->