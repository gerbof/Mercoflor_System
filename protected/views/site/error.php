<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<?php if(Yii::app()->user->hasFlash('error')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/error.css" />

<div id="error_image">
	<img src="<?php echo Yii::app()->user->getFlash('error'); ?>" alt="Error"/>
</div>
<?php endif; ?>

<div id="code">
	<p>ERROR <?php echo $code; ?></p>
</div>

<div id="mensaje">
	<p>Oops! <?php echo CHtml::encode($message); ?></p>
	<p>Le aconsejamos volver hacia atr&aacute;s</p>
</div>