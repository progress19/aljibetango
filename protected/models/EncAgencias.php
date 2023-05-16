<?php

/**
 * This is the model class for table "tblenc_agencias".
 *
 * The followings are the available columns in table 'tblenc_agencias':
 * @property string $id_encuesta
 * @property string $idcli
 * @property string $cli
 * @property string $agencia
 * @property integer $opcion1
 * @property integer $opcion2
 * @property integer $opcion3
 * @property integer $opcion4
 * @property integer $opcion5
 * @property integer $opcion6
 * @property string $sugerencias
 * @property string $noticias
 * @property string $nombre
 * @property string $email
 * @property string $estado
 */
class EncAgencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblenc_agencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcli, cli, agencia, opcion1, opcion2, opcion3, opcion4, opcion5, opcion6, sugerencias, noticias, nombre, email, estado', 'required'),
			array('opcion1, opcion2, opcion3, opcion4, opcion5, opcion6', 'numerical', 'integerOnly'=>true),
			array('idcli', 'length', 'max'=>20),
			array('cli, agencia, nombre, email', 'length', 'max'=>200),
			array('noticias, estado', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_encuesta, idcli, cli, agencia, opcion1, opcion2, opcion3, opcion4, opcion5, opcion6, sugerencias, noticias, nombre, email, estado', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_encuesta' => 'Id Encuesta',
			'idcli' => 'Id Cliente',
			'cli' => 'Cliente',
			'agencia' => 'Agencia',
			'opcion1' => '1 - Nuestros Servicios',
			'opcion2' => '2 - Profesionalismo del Personal de Reservas',
			'opcion3' => '3 - Nuestras Visitas Comerciales',
			'opcion4' => '4 - Nuestras Eficacia y rapidez en las reservas',
			'opcion5' => '5 - Claridad en nuestra información y los tarifarios',
			'opcion6' => '6 - Relación precio / calidad de servicios',
			'sugerencias' => 'Sugerencias',
			'noticias' => 'Recibir novedades',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_encuesta',$this->id_encuesta,true);
		$criteria->compare('idcli',$this->idcli,true);
		$criteria->compare('cli',$this->cli,true);
		$criteria->compare('agencia',$this->agencia,true);
		$criteria->compare('opcion1',$this->opcion1);
		$criteria->compare('opcion2',$this->opcion2);
		$criteria->compare('opcion3',$this->opcion3);
		$criteria->compare('opcion4',$this->opcion4);
		$criteria->compare('opcion5',$this->opcion5);
		$criteria->compare('opcion6',$this->opcion6);
		$criteria->compare('sugerencias',$this->sugerencias,true);
		$criteria->compare('noticias',$this->noticias,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado,true);

		$sort=new CSort();

 		$sort->defaultOrder = '`t`.`id_encuesta` DESC';

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
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getEncuestas($desde,$hasta)
	{
		$encuestas = EncAgencias::model()->findAllByAttributes(
        array(),
        	//$condition = 'fecha >= :desde AND fecha <= :hasta',
        	$condition = 'fecha Between :desde AND :hasta AND estado=1',
        	$params     = array(
                ':desde' => $desde,
                ':hasta' => $hasta,
        		)
        );
		return $encuestas; 
	}

}
