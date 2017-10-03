<?php

/**
 * This is the model class for table "especie_ingresada".
 *
 * The followings are the available columns in table 'especie_ingresada':
 * @property integer $idesp_ing
 * @property integer $idingreso_esp_ing
 * @property integer $idespecie_esp_ing
 * @property string $fecha
 * @property string $hora
 * @property string $color
 * @property double $precio
 * @property integer $stock
 *
 * The followings are the available model relations:
 * @property Ingreso $idingresoEspIng
 * @property Especie $idespecieEspIng
 */
class EspecieIngresada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especie_ingresada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idingreso_esp_ing, idespecie_esp_ing, fecha, hora, color, precio, stock', 'required'),
			array('idingreso_esp_ing, idespecie_esp_ing, stock', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('color', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idesp_ing, idingreso_esp_ing, idespecie_esp_ing, fecha, hora, color, precio, stock', 'safe', 'on'=>'search'),
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
			'idingresoEspIng' => array(self::BELONGS_TO, 'Ingreso', 'idingreso_esp_ing'),
			'idespecieEspIng' => array(self::BELONGS_TO, 'Especie', 'idespecie_esp_ing'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idesp_ing' => 'Idesp Ing',
			'idingreso_esp_ing' => 'Idingreso Esp Ing',
			'idespecie_esp_ing' => 'Idespecie Esp Ing',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'color' => 'Color',
			'precio' => 'Precio',
			'stock' => 'Stock',
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

		$criteria->compare('idesp_ing',$this->idesp_ing);
		$criteria->compare('idingreso_esp_ing',$this->idingreso_esp_ing);
		$criteria->compare('idespecie_esp_ing',$this->idespecie_esp_ing);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('stock',$this->stock);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EspecieIngresada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
