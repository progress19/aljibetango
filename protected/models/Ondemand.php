<?php

class Ondemand extends CActiveRecord {
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblondemand';
	}

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
			array('payerEmail, payerName', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, orderId, payerEmail, payerName', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
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
	
		$criteria->compare('id',$this->id,true);

		$criteria->compare('orderId',$this->orderId,true);
		$criteria->compare('payerId',$this->payerId,true);
		$criteria->compare('payerEmail',$this->payerEmail,true);
		$criteria->compare('payerCountry',$this->payerCountry,true);
		$criteria->compare('payerName',$this->payerName,true);
		$criteria->compare('paymentAmount',$this->paymentAmount,true);
		$criteria->compare('paymentReference',$this->paymentReference,true);

		$sort=new CSort();

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

}

