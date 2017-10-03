<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idusuario
 * @property string $username
 * @property string $password
 * @property string $nomyape
 * @property string $cuit
 * @property string $email
 * @property string $direccion
 * @property string $razon_social
 * @property string $condicion_impositiva
 * @property integer $nrosocio
 * @property integer $idperfil_usuario
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Ayudante[] $ayudantes
 * @property Compra[] $compras
 * @property Compra[] $compras1
 * @property Ingreso[] $ingresos
 * @property Perfil $idperfilUsuario
 * @property Venta[] $ventas
 * @property Venta[] $ventas1
 */
class Usuario extends CActiveRecord
{
	public $repetir_pwd;
	public $verifyCode;
	public $maximo;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, nomyape, cuit, email, idperfil_usuario, direccion, razon_social', 'required'),
			array('nrosocio, idperfil_usuario, activo', 'numerical', 'integerOnly'=>true),
			array('nomyape', 'length', 'max'=>50),
			array('cuit', 'length', 'max'=>13),
			array('username, email, direccion, razon_social', 'length', 'max'=>60),
			array('condicion_impositiva', 'length', 'max'=>40),
			array('nomyape', 'match', 'pattern'=>'/^[a-zA-Z\s]+$/', 'message'=>'Solo debe ingresar letras.'),
			array('email', 'email', 'message'=>'El formato del {attribute} no es valido'),
			array('password', 'length', 'max'=>30, 'min'=>8, 'message' => '{attribute} debe tener al menos 8 caracteres.'),
			array('password', 'match', 'pattern'=>'/^[a-zA-Z0-9]+$/i', 'message' => 'Solo letras y numeros.'),
			array('email', 'unique', 'className' => 'Usuario', 'message' => 'El usuario ya esta registrado en el sistema.'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuario, username, password, nomyape, cuit, email, direccion, razon_social, condicion_impositiva, nrosocio, idperfil_usuario, activo', 'safe', 'on'=>'search'),
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
			'ayudantes' => array(self::HAS_MANY, 'Ayudante', 'idusuario_ayudante'),
			'compras' => array(self::HAS_MANY, 'Compra', 'idcomprador'),
			'compras1' => array(self::HAS_MANY, 'Compra', 'idvendedor'),
			'ingresos' => array(self::HAS_MANY, 'Ingreso', 'idusuario_ingreso'),
			'idperfilUsuario' => array(self::BELONGS_TO, 'Perfil', 'idperfil_usuario'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idusuario_vta'),
			'ventas1' => array(self::HAS_MANY, 'Venta', 'idcliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'username' => 'Nombre de usuario',
			'password' => 'Contrase&#241;a',
			'nomyape' => 'Nombre y Apellido',
			'cuit' => 'CUIT',
			'email' => 'E-Mail',
			'direccion' => 'Direccion',
			'razon_social' => 'Razon Social',
			'condicion_impositiva' => 'Condicion Impositiva',
			'nrosocio' => 'Nro. socio',
			'idperfil_usuario' => 'Tipo de Usuario',
			'activo' => 'Usuario Activo',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nomyape',$this->nomyape,true);
		$criteria->compare('cuit',$this->cuit,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('razon_social',$this->razon_social,true);
		$criteria->compare('condicion_impositiva',$this->condicion_impositiva,true);
		$criteria->compare('nrosocio',$this->nrosocio);
		$criteria->compare('idperfil_usuario',$this->idperfil_usuario);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getPerfil(){
		return array(
			'1'=>'Socio',
			'2'=>'Inquilino',
			'3'=>'Cliente',
			'4'=>'Cooperativo',
		);
	}
	
	public function getCondicion(){
		return array(
			'Responsable Monotributo'=>'Responsable Monotributo',
			'Responsable Inscripto'=>'Responsable Inscripto',
			'Responsable No Inscripto'=>'Responsable No Inscripto',
			'Exento'=>'Exento',
		);
	}
	
	public function getMaxSocio(){
		$criteria=new CDbCriteria;
		$criteria->select='MAX(nrosocio) AS maximo';
		$row = $this->model()->find($criteria);
		return $row['maximo'];
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
