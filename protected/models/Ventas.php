<?php

/**
 * This is the model class for table "tblventas".
 *
 * The followings are the available columns in table 'tblventas':
 * @property string $idVenta
 * @property string $idUsuario
 * @property string $idShow
 * @property integer $cantidad
 * @property string $sesion
 * @property integer $estado
 * @property string $fecha
 * @property string $txn_id
 * @property string $paymentstatus
 * @property string $idHotel
 * @property integer $impreso
 * @property string $fechaShow
 * @property integer $transfer
 */
class Ventas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblventas';
	}

	public $show_nombre;
	public $usuario_nombre;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idShow, cantidad, sesion, fecha, impreso, fechaShow, transfer', 'required'),
			array('cantidad, estado, impreso, transfer', 'numerical', 'integerOnly'=>true),
			array('idUsuario, idShow, paymentstatus', 'length', 'max'=>20),
			array('sesion, txn_id', 'length', 'max'=>50),
			array('fecha, fechaShow', 'length', 'max'=>10),
			array('idHotel', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idVenta, idUsuario, idShow, cantidad, sesion, estado, fecha, txn_id, paymentstatus, idHotel, impreso, fechaShow, transfer, show_nombre, usuario_nombre', 'safe', 'on'=>'search'),
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
			'show' => array(self::BELONGS_TO, 'Shows', 'idShow'),
			'cliente' => array(self::BELONGS_TO, 'Usuarios', 'idUsuario'),
			'hotel' => array(self::BELONGS_TO, 'Hoteles', 'idHotel'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVenta' => 'Id Venta',
			'idUsuario' => 'Id Usuario',
			'idShow' => 'Id Show',
			'cantidad' => 'Cantidad',
			'sesion' => 'Sesion',
			'estado' => 'Estado',
			'fecha' => 'Fecha',
			'txn_id' => 'N° de Transacción',
			'paymentstatus' => 'Estado de Pago',
			'idHotel' => 'Hotel',
			'impreso' => 'Impreso',
			'fechaShow' => 'Fecha Show',
			'transfer' => 'Transfer',
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

	
		$criteria->with = array('show','cliente');
        $criteria->compare('show.titulo_es',$this->show_nombre,true); 

        //$criteria->with = array('cliente');
        $criteria->compare('cliente.apellido',$this->usuario_nombre,true); 

		$criteria->compare('idVenta',$this->idVenta,true);
		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('idShow',$this->idShow,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('sesion',$this->sesion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('txn_id',$this->txn_id,true);
		$criteria->compare('paymentstatus',$this->paymentstatus,true);
		$criteria->compare('idHotel',$this->idHotel,true);
		$criteria->compare('impreso',$this->impreso);
		$criteria->compare('fechaShow',$this->fechaShow,true);
		$criteria->compare('transfer',$this->transfer);

		  $sort=new CSort();

		  $sort->attributes = array(
            'show_nombre'=>array(
                'asc'=>'show.titulo_es ASC',
                'desc'=>'show.titulo_es DESC',
            ), 
            'usuario_nombre'=>array(
                'asc'=>'cliente.apellido ASC',
                'desc'=>'cliente.apellido DESC',
            ), 

             '*', // this adds all of the other columns as sortable
        );

		$sort->defaultOrder = '`t`.`idVenta` DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort

		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ventas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public static function actualizarVenta($txn_id)	{

	$venta = Ventas::model()->findByAttributes(array('sesion' => Yii::app()->session->sessionID));

	if ($venta!="") {

		$venta->txn_id = $txn_id;
		$venta->paymentstatus = "Completado";
		$venta->save(false);
		
	}
	}

	public static function actualizarVentaIPN($idVenta,$txn_id,$payment_status)	{

		$pago = Ventas::model()->findByAttributes(array('idVenta' => $idVenta));

			$pago->txn_id = $txn_id;
			$pago->paymentstatus = $payment_status;
			$pago->save(false);

	}

	public static function getVenta($id)
	{
		$venta = Ventas::model()->findByPk($id);
		return $venta; 
	}

	public static function getNombreShow($id) {

		if ($id==9999) { //es cava
			$cava = Cava::getCava($id);	
			$nombre = $cava['titulo_es'];
		} 

		if ($id==9998) { //es clase
			$clase = Clases::getClase($id);	
			$nombre = $clase['titulo_es'];
		} 

		if ($id!=9999 AND $id!=9998) { //es show
			$show = Shows::getShow($id);	
			$nombre = $show['titulo_es'];
		} 

		return $nombre;

	}
}
