<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>


	<?php
		$vtasSocNoms = array();
		$vtasSocCants = array();
		foreach($vtasSoc as $v){
			array_push($vtasSocNoms,$v['nomyape']);
			array_push($vtasSocCants,$v['cant']);
		}
		
		for($i=0;$i < count($vtasSocCants); $i++){
			$vtasSocCants[$i]= (int)$vtasSocCants[$i];
		}
		
		$this->Widget('ext.highcharts.HighchartsWidget', array(
			'options'=>array(
				'title' => array('text' => 'Ventas generales por socios/inquilinos'),
				'chart' => array('defaultSeriesType' => 'column', 'color' => 'blue'),
				'labels'=> array('align' => 'center',
								 'style' => array( 'fontSize' => '13px')
								),
				'xAxis' => array(
					'categories' => $vtasSocNoms
				),
				'yAxis' => array(
					'title' => array('text' => 'Unidades'),
					'min'=> 0
				),
				'tooltip' => array(
								'formatter' => new CJavaScriptExpression("
												function() { 
														return ''+ this.x +': '+ this.y +' unidades';}")
								),
				'plotOptions' => array(
							'column' => array(
											'pointPadding' => 0.2,
											'borderWidth' => 0
											)
									),
				'series' => array(
					array(
						'name' => 'Socios/inquilinos',
						'data' => $vtasSocCants
						)
				)
			)
		));
			
	?>	
	<?php
		$vtasEspNoms = array();
		$vtasEspCants = array();
		foreach($vtasEsp as $v){
			array_push($vtasEspNoms,$v['nom_vulgar']);
			array_push($vtasEspCants,$v['cant']);
		}
		for($i=0;$i < count($vtasEspCants); $i++){
			$vtasEspCants[$i]= (int)$vtasEspCants[$i];
		}
		
		$this->Widget('ext.highcharts.HighchartsWidget', array(
			'options'=>array(
				'title' => array('text' => 'Ventas generales por especies'),
				'chart' => array('defaultSeriesType' => 'column'),
				'labels'=> array('align' => 'center',
								 'style' => array( 'fontSize' => '13px')
								),
				'xAxis' => array(
					'categories' => $vtasEspNoms
				),
				'yAxis' => array(
					'title' => array('text' => 'Unidades'),
					'min'=> 0
				),
				'tooltip' => array(
									'formatter' => new CJavaScriptExpression("
													function() { 
														return ''+ this.x +': '+ this.y +' unidades';}")
								),
				'plotOptions' => array(
							'column' => array(
											'pointPadding' => 0.2,
											'borderWidth' => 0,
											'color' => '#a6c96a'
											)
									),
				'series' => array(
					array(
						'name' => 'Especies',
						'data' => $vtasEspCants
						)
				)
			)
		));
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

<?php $this->endWidget(); ?>

</div><!-- form -->