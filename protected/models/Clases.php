<?php

/**
 * This is the model class for table "tblclases".
 *
 * The followings are the available columns in table 'tblclases':
 * @property string $idShow
 * @property string $titulo_es
 * @property string $titulo_en
 * @property string $titulo_pr
 * @property string $des_es
 * @property string $des_en
 * @property string $des_pr
 * @property double $precio2_4
 * @property double $precio5_15
 * @property double $precio16
 * @property string $fecha
 * @property string $hasta
 * @property string $imagen
 * @property integer $estado
 */
class Clases extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblclases';
	}

	public $fechaString;
	public $hastaString;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaString' ,'convertir_fecha1'), 
			array('hastaString' ,'convertir_fecha2'),
			array('titulo_es, des_es, imagen', 'required'),
			array('des_en, des_pr, des_zh' ,'default' ),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('precio1, precio2, precio3_6, precio7_10, precio11_19, precio20, duracion', 'numerical'),
			array('titulo_es, titulo_en, titulo_pr, titulo_zh', 'length', 'max'=>500),
			array('todoslosdias, fecha, hasta', 'length', 'max'=>12),
			array('imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idShow, titulo_es, titulo_en, titulo_pr, des_es, des_en, fecha, hasta, imagen, estado, duracion', 'safe', 'on'=>'search'),
		);
	}

	public function convertir_fecha1($attr, $params){
 	  $this->fecha = CDateTimeParser::parse($this->fechaString,'dd/MM/yyyy');
 	 }

 	public function convertir_fecha2($attr, $params){
 	  $this->hasta = CDateTimeParser::parse($this->hastaString,'dd/MM/yyyy');
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
			'idShow' => 'Id Show',
			'titulo_es' => 'Título Español',
			'titulo_en' => 'Titulo En',
			'titulo_pr' => 'Titulo Pr',
			'des_es' => 'Descripción Español',
			'des_en' => 'Des En',
			'des_pr' => 'Des Pr',
			'precio1' => '1 Persona',
			'precio2' => '2 Personas',
			'precio3_6' => 'de 3 a 6 Personas',
			'precio7_10' => 'de 7 a 10 Personas',
			'precio11_19' => 'de 11 a 19 Personas',
			'precio20' => 'más de 20 Personas',
			'fecha' => 'Desde',
			'hasta' => 'Hasta',
			'imagen' => 'Imagen',
			'estado' => 'Estado',
			'todoslosdias' => 'Todos los días',
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

		$criteria->compare('idShow',$this->idShow,true);
		$criteria->compare('titulo_es',$this->titulo_es,true);
		$criteria->compare('titulo_en',$this->titulo_en,true);
		$criteria->compare('titulo_pr',$this->titulo_pr,true);
		$criteria->compare('des_es',$this->des_es,true);
		$criteria->compare('des_en',$this->des_en,true);
		$criteria->compare('des_pr',$this->des_pr,true);
		$criteria->compare('precio1',$this->precio1);
		$criteria->compare('precio2',$this->precio2);
		$criteria->compare('precio3_6',$this->precio3_6);
		$criteria->compare('precio7_10',$this->precio7_10);
		$criteria->compare('precio11_19',$this->precio11_19);
		$criteria->compare('precio20',$this->precio20);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hasta',$this->hasta,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('duracion',$this->duracion);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clases the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getClase($id)	{
		$clase = Clases::model()->findByPk($id);
		return $clase; 
	}

	public static function getClases()	{
		$clase = Clases::model()->findAllByAttributes(
	        array(),
	        $condition = 'estado = 1');
			return $clase; 
		}

}
