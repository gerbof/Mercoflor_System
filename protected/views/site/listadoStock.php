<?php

$this -> pageTitle = 'Stock';
$this -> breadcrumbs = array(
	'Listado de Plantas',
);

?>
<h3> Stock de la Cooperativa </h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ingreso-grid',
	'dataProvider'=>$model->getStockEspecie(),
	'summaryText'=>'',
	'columns'=>array(
		array(
			'name'=>'Nombre Vulgar',
			'value'=>'$data["nom_vulgar"]',),
		array(
			'name'=>'Nombre Cient&iacute;fico',
			'value'=>'$data["nom_cientifico"]',),
		array(
			'name'=>'H&aacute;bitat',
			'value'=>'$data["habitat"]',),	
		array(
			'name'=>'Regi&oacute;n',
			'value'=>'$data["region"]',),
		array(
			'name'=>'Epoca',
			'value'=>'$data["epoca"]',),
		array(
			'name'=>'Tipo de Planta',
			'value'=>'$data["tipo"]',),
		array(
			'name'=>'Stock',
			'value'=>'$data["stock"]',),
	),
)); ?>