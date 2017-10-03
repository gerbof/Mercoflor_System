<?php

$this -> pageTitle = 'Estadisticas Generales';

?>
<h3> ESTADISTICA DE VENTAS GENERALES POR SOCIOS Y ESPECIES </h3>

<?php $this->renderPartial('_formEstadisticas', array('model'=>$model)); ?>