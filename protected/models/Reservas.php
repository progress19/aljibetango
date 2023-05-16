<?php


class Reservas extends CActiveRecord {
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblreservas';
	}

	public $show_nombre;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('orderId, payerId', 'numerical', 'integerOnly'=>true),
			array('payerCountry, paymentAmount, paymentReference', 'length', 'max'=>20),
			array('payerEmail, payerName, nombre, telefono, email, hotelOther', 'length', 'max'=>60),
			array('fechaReserva', 'length', 'max'=>10),
			array('cantidadPasajeros, idHotel, tipo', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, orderId, payerEmail, payerName, nombre, email', 'safe', 'on'=>'search'),
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
			'hotel' => array(self::BELONGS_TO, 'Hoteles', 'idHotel'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id Reserva',
			'cantidadPasajeros' => 'Pasajeros',
			'telefono' => 'whatsapp',
			'idHotel' => 'Hotel',
			'hotelOther' => 'Hotel',
			'show_nombre' => 'Show',

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
	
		//$criteria->with = array('show','cliente');
        //$criteria->compare('show.titulo_es',$this->show_nombre,true); 

        //$criteria->with = array('cliente');
        //$criteria->compare('cliente.apellido',$this->usuario_nombre,true); 

		$criteria->compare('id',$this->id,true);

		$criteria->compare('orderId',$this->orderId,true);
		$criteria->compare('payerId',$this->payerId,true);
		$criteria->compare('payerEmail',$this->payerEmail,true);
		$criteria->compare('payerCountry',$this->payerCountry,true);
		$criteria->compare('payerName',$this->payerName,true);
		$criteria->compare('paymentAmount',$this->paymentAmount,true);

		$criteria->compare('paymentReference',$this->paymentReference,true);
		$criteria->compare('fechaReserva',$this->fechaReserva,true);
		$criteria->compare('cantidadPasajeros',$this->cantidadPasajeros,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('idHotel',$this->idHotel,true);
		$criteria->compare('hotelOther',$this->hotelOther,true);


/*
  `id` bigint(20) NOT NULL,
  `orderId` varchar(20) NOT NULL,
  `payerId` varchar(20) NOT NULL,
  `payerEmail` varchar(60) NOT NULL,
  `payerCountry` varchar(5) NOT NULL,
  `payerName` varchar(150) NOT NULL,
  `paymentAmount` varchar(20) NOT NULL,
  `paymentReference` int(10) NOT NULL,
  `fechaReserva` int(11) NOT NULL,
  `cantidadPasajeros` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idHotel` int(10) NOT NULL,
  `hotelOther` varchar(20) NOT NULL
*/


		$sort=new CSort();
/*
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
*/
		$sort->defaultOrder = '`t`.`id` DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>$sort

		));
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getNombreShow($tipo, $id) {
		
		switch ($tipo) {
			case '1':
				
				$show = Shows::getShow($id);	
				$nombre = $show['titulo_es'];

				break;
			
			case '2':	
				$nombre = 'DEGUSTACIÓN DE VINOS';
				break;

			case '3':	
				$nombre = 'CLASES DE TANGO';
				break;

			default:
				$nombre = 'NA';
				break;
		}
		return $nombre;
	}


}
