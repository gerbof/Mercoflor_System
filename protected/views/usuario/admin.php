

<h1>Usuarios de la Cooperativa</h1>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array('model'=>$model,)); ?>
</div><!-- search-form -->

<?php 
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'username',
		'password',
		'nomyape',
		'cuit',
		'email',
		'direccion',
		'idperfil_usuario'=>array(
			'name'=>'idperfil_usuario',
			'value'=>'$data->idperfilUsuario->descripcion',
			'filter'=>CHtml::listData(Perfil::model()->findAll(), 'idperfil', 'descripcion')
		),
		'activo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
