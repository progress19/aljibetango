<?php

/**
 * This is the model class for table "tblshows".
 *
 * The followings are the available columns in table 'tblshows':
 * @property string $idShow
 * @property string $titulo_es
 * @property string $titulo_en
 * @property string $titulo_pr
 * @property string $titulo_ja
 * @property string $titulo_ge
 * @property string $titulo_it
 * @property string $titulo_fr
 * @property string $titulo_ru
 * @property string $des_es
 * @property string $des_en
 * @property string $des_pr
 * @property string $des_ja
 * @property string $des_ge
 * @property string $des_it
 * @property string $des_fr
 * @property string $des_ru
 * @property string $des_ch
 * @property double $precio
 * @property integer $disponibilidad
 * @property string $fecha
 * @property string $hasta
 * @property integer $duracion
 * @property string $hasta
 * @property double $precioTransfer
 * @property string $imagen
 * @property integer $estado
 */
class Shows extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblshows';
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
			array('titulo_es, des_es, precio, imagen', 'required'),
			array('des_en, des_pr, des_ja, des_ge, des_it, des_fr, des_ru, des_zh, hora_cena, hora_show' ,'default' ),
			array('disponibilidad, capacidad, estado', 'numerical', 'integerOnly'=>true),
			array('precio, precioTransfer, duracion,', 'numerical'),
			array('titulo_es, titulo_en, titulo_pr, titulo_ja, titulo_ge, titulo_it, titulo_fr, titulo_ru, titulo_zh', 'length', 'max'=>500),
			array('todoslosdias,adwords, fecha, hasta, soldout', 'length', 'max'=>12),
			array('imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idShow, titulo_es, titulo_en, titulo_pr, titulo_ja, titulo_ge, titulo_it, titulo_fr, titulo_ru, des_es, des_en, des_pr, des_ja, des_ge, des_it, des_fr, des_ru, des_zh, precio, disponibilidad, fecha, hasta, precioTransfer, duracion, imagen, estado', 'safe', 'on'=>'search'),
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
			'titulo_ja' => 'Titulo Ja',
			'titulo_ge' => 'Titulo Ge',
			'titulo_it' => 'Titulo It',
			'titulo_fr' => 'Titulo Fr',
			'titulo_ru' => 'Titulo Ru',
			'titulo_zh' => 'Titulo Ch',
			'des_es' => 'Descripción Español',
			'des_en' => 'Des En',
			'des_pr' => 'Des Pr',
			'des_ja' => 'Des Ja',
			'des_ge' => 'Des Ge',
			'des_it' => 'Des It',
			'des_fr' => 'Des Fr',
			'des_ru' => 'Des Ru',
			'des_zh' => 'Des Ch',
			'precio' => 'Precio',
			'disponibilidad' => 'Disponibilidad',
			'fecha' => 'Desde',
			'hasta' => 'Hasta',
			'precioTransfer' => 'Precio Transfer',
			'imagen' => 'Imagen',
			'estado' => 'Estado',
			'todoslosdias' => 'Todos los días',
			'adwords' => 'AdWords',
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
		$criteria->compare('titulo_ja',$this->titulo_ja,true);
		$criteria->compare('titulo_ge',$this->titulo_ge,true);
		$criteria->compare('titulo_it',$this->titulo_it,true);
		$criteria->compare('titulo_fr',$this->titulo_fr,true);
		$criteria->compare('titulo_ru',$this->titulo_ru,true);
		$criteria->compare('titulo_zh',$this->titulo_zh,true);
		$criteria->compare('des_es',$this->des_es,true);
		$criteria->compare('des_en',$this->des_en,true);
		$criteria->compare('des_pr',$this->des_pr,true);
		$criteria->compare('des_ja',$this->des_ja,true);
		$criteria->compare('des_ge',$this->des_ge,true);
		$criteria->compare('des_it',$this->des_it,true);
		$criteria->compare('des_fr',$this->des_fr,true);
		$criteria->compare('des_ru',$this->des_ru,true);
		$criteria->compare('des_zh',$this->des_zh,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('disponibilidad',$this->disponibilidad);
		$criteria->compare('duracion',$this->duracion);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hasta',$this->hasta,true);
		$criteria->compare('precioTransfer',$this->precioTransfer);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Shows the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getShows()
	{
		$shows = Shows::model()->findAllByAttributes(
        array(),
        $condition = 'todoslosdias = "on" AND adwords !="on" AND estado = 1');
		return $shows; 
	}

	public static function getShow($id)	{
		$show = Shows::model()->findByPk($id);
		return $show; 
	}

	public static function getShowsEspeciales()	{
		$showsEspeciales = Shows::model()->findAllByAttributes(
	        array(),
	        $condition = 'todoslosdias != "on" AND adwords !="on" AND fecha > 1 AND hasta="" AND estado = 1');
			return $showsEspeciales; 
		}

	public static function getShowsPromos()	{
		$showsPromos = Shows::model()->findAllByAttributes(
	        array(),
	        $condition = 'todoslosdias != "on" AND adwords !="on" AND fecha > 1 AND hasta > 1 AND estado = 1');
			return $showsPromos; 
	}

}
