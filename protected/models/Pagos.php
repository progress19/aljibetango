<?php

/**
 * This is the model class for table "tblpagos".
 *
 * The followings are the available columns in table 'tblpagos':
 * @property string $idPago
 * @property string $nombre
 * @property string $email
 * @property string $titulo
 * @property double $precio
 * @property string $fecha
 * @property string $comentarios
 * @property string $txn_id
 * @property string $paymentstatus
 * @property string $idAdmin
 */
class Pagos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblpagos';
	}

	public $fechaString;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaString' ,'convertir_fecha1'), 
			array('nombre, precio, titulo, email', 'required'),
			array('precio', 'numerical'),
			array('nombre, email, txn_id, paymentstatus', 'length', 'max'=>50),
			array('titulo', 'length', 'max'=>100),
			array('fecha', 'length', 'max'=>12),
			array('idAdmin', 'length', 'max'=>10),
			array('comentarios', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPago, nombre, email, titulo, precio, fecha, comentarios, txn_id, paymentstatus, idAdmin', 'safe', 'on'=>'search'),
		);
	}

	public function convertir_fecha1($attr, $params){
	   $this->fecha = CDateTimeParser::parse($this->fechaString,'dd/MM/yyyy');
	      if($this->fecha == null)
   				$this->addError('fecha','La fecha es obligatoria.');
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
			'idPago' => 'Id Pago',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'titulo' => 'Titulo',
			'precio' => 'Precio',
			'fecha' => 'Fecha',
			'comentarios' => 'Comentarios',
			'txn_id' => 'Txn',
			'paymentstatus' => 'Paymentstatus',
			'idAdmin' => 'Id Admin',
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

		$criteria->compare('idPago',$this->idPago,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('txn_id',$this->txn_id,true);
		$criteria->compare('paymentstatus',$this->paymentstatus,true);
		$criteria->compare('idAdmin',$this->idAdmin,true);

        $sort=new CSort();

		$sort->defaultOrder = '`t`.`idPago` DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort

		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pagos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getPago($id)
	{
		$pago = Pagos::model()->findByPk($id);
		return $pago; 
	}

	public static function sesionPago($id)
	{

	$pago = Pagos::model()->findByAttributes(array('idPago' => $id));

		$pago->sesion = Yii::app()->session->sessionID;
		$pago->save(false);

	}

	public static function actualizarPago($txn_id)	{

	$pago = Pagos::model()->findByAttributes(array('sesion' => Yii::app()->session->sessionID));

		$pago->txn_id = $txn_id;
		$pago->paymentstatus = "Completado";
		$pago->save(false);

	}

}
