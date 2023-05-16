<?php

/**
 * This is the model class for table "tblusuarios".
 *
 * The followings are the available columns in table 'tblusuarios':
 * @property string $idUsuario
 * @property string $email
 * @property string $clave
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $ciudad
 * @property integer $idPais
 * @property integer $estado
 * @property string $sesion
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblusuarios';
	}

	public $pais_nombre;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, nombre, apellido', 'required'),
			array('idPais, estado', 'numerical', 'integerOnly'=>true),
			array('email, clave, nombre, apellido, sesion', 'length', 'max'=>50),
			array('telefono, ciudad', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, email, clave, nombre, apellido, telefono, ciudad, idPais, estado, sesion, pais_nombre', 'safe', 'on'=>'search'),
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
			'pais' => array(self::BELONGS_TO, 'Paises', 'idPais'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'email' => 'Email',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono' => 'Telefono',
			'ciudad' => 'Ciudad',
			'idPais' => 'Id Pais',
			'estado' => 'Estado',
			'sesion' => 'Sesion',
			'pais_nombre' => 'País',
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

		$criteria->with = array('pais');
        $criteria->compare('pais.nombre',$this->pais_nombre,true); 

		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('`t`.`nombre`',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('`t`.`idPais`',$this->idPais);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('sesion',$this->sesion,true);

		$sort=new CSort();

		  $sort->attributes = array(
            'pais_nombre'=>array(
                'asc'=>'pais.nombre ASC',
                'desc'=>'pais.nombre DESC',
            ), 

             '*', // this adds all of the other columns as sortable
        );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
