<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title>Cooperativa MercoFlor</title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">
			<span><img id="flor-fondo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/flor.gif" alt="flor"/></span>
			<img id="logo-image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/titulo.png" alt="MercoFlor"/>
			<span><img id="flor1-fondo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/flor.gif" alt="flor1"/></span>
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
		$user=Yii::app()->user;
		$this->widget('zii.widgets.CMenu',array(
			'activeCssClass'=>'active',
			'activateParents'=>true,
			'items'=>array(
				array('label'=>'INICIO', 'url'=>array('/site/index'), 'visible'=>$user->isGuest),
				array('label'=>'INICIO', 'url'=>array('/usuario/index'), 'visible'=>!$user->isGuest),
				array(
					'label'=>'GESTION DE USUARIOS', 
					'url'=>'', 
					'visible'=>!$user->isGuest && $user->isAdmin(),
					'itemOptions'=>array('id'=>'itemUsuario'),
					'items'=>array(
						array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/agregar.png" alt="Nuevo"> Nuevo Usuario', 
							  'url'=>array('/usuario/create')),
						array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/lista.png" alt="Nuevo"> Listar Usuarios', 
							  'url'=>array('/usuario/admin')),
					),
				),
				array('label'=>'LISTADO DE PLANTAS', 'url'=>array('site/listadoStock'), 'visible'=>$user->isGuest),
				array('label'=>'SOBRE NOSOTROS', 'url'=>array('/site/about'), 'view'=>'about', 'visible'=>$user->isGuest),
				array('label'=>'CONTACTO', 'url'=>array('/site/contact'), 'visible'=>$user->isGuest),
				array('label'=>'ACERCA DE', 'url'=>array('/site/acercade'), 'visible'=>$user->isGuest),
				array('label'=>'ESTADISTICAS GENERALES', 'url'=>array('/usuario/estadisticas'), 'visible'=>!$user->isGuest),
				array('label'=>'REGISTRARME', 'url'=>array('/site/registro'), 'visible'=>$user->isGuest),
				array('id'=>'login', 'label'=>'INGRESAR', 'url'=>array('/site/login'), 'visible'=>$user->isGuest),
				array('label'=>'SALIR ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!$user->isGuest)
			),
			'encodeLabel' => false,
		)); 
		?>
	</div><!-- mainmenu -->

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> - GRUPO_46 | Todos los derechos reservados
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
