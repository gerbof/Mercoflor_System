<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class EstadisticasForm extends CFormModel
{
	public $fechaDesde;
	public $fechaHasta;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			
			array('fechaDesde, fechaHasta', 'required'),
			array('fechaDesde', 'compare', 'compareAttribute'=>'fechaHasta','operator'=>'!=','message'=>'Las fechas son iguales'),

		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'fechaDesde'=>'Fecha Desde:',
			'fechaHasta'=>'Fecha Hasta:',
		);
	}
	
	//retorna ventas por criterio de socio entre dos fechas
	static public function getVentasPorSocio($fecha1, $fecha2){
		$sql = 'SELECT idusuario, nomyape, sum(cantidad) as cant FROM venta inner join usuario on (idusuario = idusuario_vta)
									inner join especie on (idespecie = idespecie_vta)
				where activo = 1 and fecha between :fecha1 and :fecha2
				group by idusuario
				order by nomyape';	
		$command = Yii::app()->db->createCommand($sql);
		$command-> bindParam(':fecha1',$fecha1,PDO::PARAM_STR);
		$command-> bindValue(':fecha2',$fecha2,PDO::PARAM_STR);
		$count= $command->queryAll();
		$dataProvider = new CSqlDataProvider($sql, array('totalItemCount'=>$count,
															'keyField' => 'idusuario',
															)
											);
		return $dataProvider -> getTotalItemCount();
	}
	
			//retorna ventas por criterio de especie entre dos fechas
			
	static public function getVentasPorEsp($fecha1, $fecha2){
		$sql = 'SELECT nom_vulgar, sum(cantidad) as cant FROM venta inner join usuario on (idusuario = idusuario_vta)
									inner join especie on (idespecie = idespecie_vta)
				where activo = 1 and fecha between :fecha1 and :fecha2
				group by idespecie
				order by nom_vulgar';
		$command = Yii::app()->db->createCommand($sql);
		$command-> bindParam(':fecha1',$fecha1,PDO::PARAM_STR);
		$command-> bindValue(':fecha2',$fecha2,PDO::PARAM_STR);
		$count= $command->queryAll();
		$dataProvider = new CSqlDataProvider($sql, array('totalItemCount'=>$count,
															'keyField' => 'idespecie',
															)
											);
		return $dataProvider -> getTotalItemCount();
	}

}
