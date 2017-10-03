<?php
/* @var $this EspecieIngresadaController */
/* @var $model EspecieIngresada */

$this->breadcrumbs=array(
	'Especie Ingresadas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EspecieIngresada', 'url'=>array('index')),
	array('label'=>'Create EspecieIngresada', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#especie-ingresada-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Especie Ingresadas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'especie-ingresada-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idesp_ing',
		'idingreso_esp_ing',
		'idespecie_esp_ing',
		'fecha',
		'hora',
		'color',
		/*
		'precio',
		'stock',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
