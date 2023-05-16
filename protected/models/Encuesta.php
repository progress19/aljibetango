<?php

class Encuesta extends CActiveRecord {

	/**
	 * @return string the associated database table name
	 */
	
	public function tableName() {
		return 'encuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('opcion1, opcion2, opcion3, opcion4, opcion5, opcion6, opcion7, opcion8, opcion9, opcion10, comentarios, nombre, email, idPais, estado', 'required'),
			array('opcion1, opcion2, opcion3, opcion4, opcion5, opcion6, opcion7, opcion8, opcion9, opcion10', 'numerical', 'integerOnly'=>true),
			array('idPais, nombre, email', 'length', 'max'=>200),
			array('estado', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idPais, opcion1, opcion2, opcion3, opcion4, opcion5, opcion6, opcion7, opcion8, opcion9, opcion10, comentarios, nombre, email, estado', 'safe', 'on'=>'search'),
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
			'pais_rel'=>array(self::BELONGS_TO, 'Paises', 'idPais'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

/*
Cortesía del personal
Calidad de instalaciones
Bloque de Tango
Bloque de Folclore
Vestuario
Atención del mozo
Temperatura y presentacion de la comida
Sabor de la comida
Calidad del vino
Transporte
*/

	public function attributeLabels() {
		return array(
			'id_encuesta' => 'Id Encuesta',
			'pais' => 'País',
			'agencia' => 'Agencia',
			'opcion1' => '1 - Cortesía del personal',
			'opcion2' => '2 - Calidad de instalaciones',
			'opcion3' => '3 - Bloque de Tango',
			'opcion4' => '4 - Bloque de Folclore',
			'opcion5' => '5 - Vestuario',
			'opcion6' => '6 - Atención del mozo',
			'opcion7' => '7 - Temperatura y presentación de la comida',
			'opcion8' => '8 - Sabor de la comida',
			'opcion9' => '9 - Calidad del vino',
			'opcion10' => '10 - Transporte',
			'comentarios' => 'Comentarios',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'estado' => 'Estado',
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
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);

		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado,true);

		$sort=new CSort();

 		$sort->defaultOrder = '`t`.`id` DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort

		));

	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EncAgencias the static model class
	 */
	
	public static function model($className=__CLASS__)	{
		return parent::model($className);
	}

	public static function getEncuestas() {
		
		$encuestas = Encuesta::model()->findAllByAttributes(
			array('estado'=>1),
			array(
				'limit'=>3,
				'order'=>'rand()'
			)
		);
		
		return $encuestas; 

	}
	
}
