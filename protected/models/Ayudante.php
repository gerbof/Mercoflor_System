<?php

/**
 * This is the model class for table "ayudante".
 *
 * The followings are the available columns in table 'ayudante':
 * @property integer $idayudante
 * @property integer $dni
 * @property string $nomyape
 * @property integer $idusuario_ayudante
 *
 * The followings are the available model relations:
 * @property Usuario $idusuarioAyudante
 */
class Ayudante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ayudante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('dni, nomyape', 'required'),
			array('dni, idusuario_ayudante', 'numerical', 'integerOnly'=>true),
			array('nomyape', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idayudante, dni, nomyape, idusuario_ayudante', 'safe', 'on'=>'search'),
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
			'idusuarioAyudante' => array(self::BELONGS_TO, 'Usuario', 'idusuario_ayudante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idayudante' => 'Idayudante',
			'dni' => 'Dni Ayudante',
			'nomyape' => 'Nombre y Apellido del Ayudante',
			'idusuario_ayudante' => 'Idusuario Ayudante',
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

		$criteria->compare('idayudante',$this->idayudante);
		$criteria->compare('dni',$this->dni);
		$criteria->compare('nomyape',$this->nomyape,true);
		$criteria->compare('idusuario_ayudante',$this->idusuario_ayudante);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ayudante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
