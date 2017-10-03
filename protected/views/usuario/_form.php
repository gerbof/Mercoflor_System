<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true,),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos resaltados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array($model)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idperfil_usuario'); ?>
		<?php echo $form->dropDownList($model,'idperfil_usuario',$model->getPerfil(),array('prompt'=>'--Seleccione Tipo--', 'onchange'=>'seleccionTipo();',)); ?>
		<?php echo $form->error($model,'idperfil_usuario'); ?>
	</div>	
	
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
		<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'razon_social'); ?>
	</div>
	

	<div id="condicion">
		<?php echo $form->labelEx($model,'condicion_impositiva'); ?>
		<?php echo $form->dropDownList($model,'condicion_impositiva',$model->getCondicion(),array('empty'=>'--Seleccione Condicion--',)); ?>
		<?php echo $form->error($model,'condicion_impositiva'); ?>
	</div>


	<div class="row">
		<?php echo $form->hiddenField($model,'nrosocio'); ?>
	</div>
	
	<?php if($model->isNewRecord): ?>
		
		<div class="radioGroup">
			<?php echo CHtml::label('¿DESEA AGREGAR AYUDANTES?','radioGroup'); ?>		
			<?php echo CHtml::radioButtonList('choice','',array('1'=>'SI','0'=>'NO'), 
											array('separator'=>'  |  ', 
												  'labelOptions'=>array('style'=>'display:inline'),
											)); 
			?>
		</div>
		
		<div id="cantidad">
			<?php echo CHtml::label('Ingrese la cantidad de ayudantes que desea agregar','cantidad'); ?>
			<?php echo CHtml::dropDownList('cant', 0, array(1=>'1', 2=>'2'), array('empty'=>'Cantidad', 'onchange'=>'selecCant();')); ?>
		</div>
	
		<div id="ayudante">
			<div id="ayu1">
				<h3>Datos del Primer Ayudante</h3>
				<div class="row">
					<?php echo $form->labelEx($ayudante1,'[1]dni'); ?>
					<?php echo $form->textField($ayudante1,'[1]dni'); ?>
					<?php echo $form->error($ayudante1,'[1]dni'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($ayudante1,'[1]nomyape'); ?>
					<?php echo $form->textField($ayudante1,'[1]nomyape',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($ayudante1,'[1]nomyape'); ?>
				</div>
			</div>	
			
			<div id="ayu2">
				<h3>Datos del Segundo Ayudante</h3>
				<div class="row">
					<?php echo $form->labelEx($ayudante2,'[2]dni'); ?>
					<?php echo $form->textField($ayudante2,'[2]dni'); ?>
					<?php echo $form->error($ayudante2,'[2]dni'); ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($ayudante2,'[2]nomyape'); ?>
					<?php echo $form->textField($ayudante2,'[2]nomyape',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($ayudante2,'[2]nomyape'); ?>
				</div>
			</div>
		</div>
		
	<?php else: ?>
		<div class="row">
			<?php echo $form->labelEx($model,'activo'); ?>
			<?php echo $form->dropDownList($model, 'activo', array(1=>'SI', 0=>'NO')); ?>
		</div>
	<?php endif; ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->