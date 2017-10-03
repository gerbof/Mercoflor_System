
<div class="form">

<?php 

$form=$this->beginWidget('CActiveForm', array('id'=>'form',));

echo $form->dropDownList($model,'idperfil',$model->nuevo()); 

?>

</div>