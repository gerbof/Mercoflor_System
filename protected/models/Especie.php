<?php

/**
 * This is the model class for table "especie".
 *
 * The followings are the available columns in table 'especie':
 * @property integer $idespecie
 * @property string $nom_vulgar
 * @property string $nom_cientifico
 * @property integer $idhabitat_especie
 * @property integer $idregion_especie
 * @property integer $idepoca_especie
 * @property integer $idtipo_especie
 *
 * The followings are the available model relations:
 * @property CompraEspecie[] $compraEspecies
 * @property TipoEspecie $idtipoEspecie
 * @property Habitat $idhabitatEspecie
 * @property Region $idregionEspecie
 * @property Epoca $idepocaEspecie
 * @property EspecieIngresada[] $especieIngresadas
 * @property Venta[] $ventas
 */
class Especie extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_vulgar, nom_cientifico, idhabitat_especie, idregion_especie, idepoca_especie, idtipo_especie', 'required'),
			array('idhabitat_especie, idregion_especie, idepoca_especie, idtipo_especie', 'numerical', 'integerOnly'=>true),
			array('nom_vulgar, nom_cientifico', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idespecie, nom_vulgar, nom_cientifico, idhabitat_especie, idregion_especie, idepoca_especie, idtipo_especie', 'safe', 'on'=>'search'),
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
			'compraEspecies' => array(self::HAS_MANY, 'CompraEspecie', 'idespecie'),
			'idtipoEspecie' => array(self::BELONGS_TO, 'TipoEspecie', 'idtipo_especie'),
			'idhabitatEspecie' => array(self::BELONGS_TO, 'Habitat', 'idhabitat_especie'),
			'idregionEspecie' => array(self::BELONGS_TO, 'Region', 'idregion_especie'),
			'idepocaEspecie' => array(self::BELONGS_TO, 'Epoca', 'idepoca_especie'),
			'especieIngresadas' => array(self::HAS_MANY, 'EspecieIngresada', 'idespecie_esp_ing'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idespecie_vta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idespecie' => 'Idespecie',
			'nom_vulgar' => 'Nom Vulgar',
			'nom_cientifico' => 'Nom Cientifico',
			'idhabitat_especie' => 'Idhabitat Especie',
			'idregion_especie' => 'Idregion Especie',
			'idepoca_especie' => 'Idepoca Especie',
			'idtipo_especie' => 'Idtipo Especie',
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

		$criteria->compare('idespecie',$this->idespecie);
		$criteria->compare('nom_vulgar',$this->nom_vulgar,true);
		$criteria->compare('nom_cientifico',$this->nom_cientifico,true);
		$criteria->compare('idhabitat_especie',$this->idhabitat_especie);
		$criteria->compare('idregion_especie',$this->idregion_especie);
		$criteria->compare('idepoca_especie',$this->idepoca_especie);
		$criteria->compare('idtipo_especie',$this->idtipo_especie);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Especie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
