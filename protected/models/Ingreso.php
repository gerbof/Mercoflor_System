<?php

/**
 * This is the model class for table "ingreso".
 *
 * The followings are the available columns in table 'ingreso':
 * @property integer $idingreso
 * @property integer $idusuario_ingreso
 * @property string $fecha
 * @property string $hora
 *
 * The followings are the available model relations:
 * @property EspecieIngresada[] $especieIngresadas
 * @property Usuario $idusuarioIngreso
 */
class Ingreso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ingreso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idusuario_ingreso, fecha, hora', 'required'),
			array('idusuario_ingreso', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idingreso, idusuario_ingreso, fecha, hora', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'especieIngresadas' => array(self::HAS_MANY, 'EspecieIngresada', 'idingreso_esp_ing'),
			'idusuarioIngreso' => array(self::BELONGS_TO, 'Usuario', 'idusuario_ingreso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idingreso' => 'Idingreso',
			'idusuario_ingreso' => 'Idusuario Ingreso',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idingreso',$this->idingreso);
		$criteria->compare('idusuario_ingreso',$this->idusuario_ingreso);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ingreso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getStockEspecie(){
		$query='SELECT idespecie, nom_vulgar, nom_cientifico, h.descripcion as habitat, r.descripcion as region,
          		e.descripcion as epoca, t.descripcion as tipo, sum(stock) as stock 
				FROM especie_ingresada inner join especie on (idespecie_esp_ing = idespecie)
										inner join habitat h on (idhabitat = idhabitat_especie)
										inner join region r on (idregion = idregion_especie)
										inner join epoca e on (idepoca = idepoca_especie)
										inner join tipo_especie t on (idtipo = idtipo_especie)
										inner join ingreso on (idingreso_esp_ing = idingreso)
										inner join usuario on (idusuario = idusuario_ingreso) and (activo = 1)
		        GROUP BY idespecie';
		$count=Yii::app()->db->createCommand($query)->queryScalar();
		$dataProvider = new CSqlDataProvider($query, array('totalItemCount'=>$count,  
															'keyField' => 'idespecie',
															'sort'=>array('attributes'=>array('idespecie',)),
															'pagination'=>array('pageSize'=>10,),
															)
											);	
		return $dataProvider;
	}
}
