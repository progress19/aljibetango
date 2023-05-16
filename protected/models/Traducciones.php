<?php

/**
 * This is the model class for table "tbltraducciones".
 *
 * The followings are the available columns in table 'tbltraducciones':
 * @property integer $idTraduccion
 * @property string $campo
 * @property string $es
 * @property string $ru
 * @property string $fr
 * @property string $it
 * @property string $ge
 * @property string $ja
 * @property string $pr
 * @property string $en
 * @property string $zh
 */
class Traducciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbltraducciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('es', 'required'),
			array('es, ru, fr, it, ge, ja, pr, en, zh',  'type', 'type'=>'string'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTraduccion, es, ru, fr, it, ge, ja, pr, en, zh', 'safe', 'on'=>'search'),
		);
	}

	/**z
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
			'idTraduccion' => 'Id Traduccion',
			'es' => 'Español',
			'ru' => 'Ruso',
			'fr' => 'Francés',
			'it' => 'Italiano',
			'ge' => 'Alemán',
			'ja' => 'Japonés',
			'pr' => 'Portugués',
			'en' => 'Inglés',
			'zh' => 'Chino',
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

		$criteria->compare('idTraduccion',$this->idTraduccion);
		$criteria->compare('es',$this->es,true);
		$criteria->compare('ru',$this->ru,true);
		$criteria->compare('fr',$this->fr,true);
		$criteria->compare('it',$this->it,true);
		$criteria->compare('ge',$this->ge,true);
		$criteria->compare('ja',$this->ja,true);
		$criteria->compare('pr',$this->pr,true);
		$criteria->compare('en',$this->en,true);
		$criteria->compare('zh',$this->zh,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Traducciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public static function getTradES()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,es"));
		$arr = array();
 		foreach ($tra as $key) {$arr[$key->es] = $key->es;} 		
		return $arr;
	}

	public static function getTradPR()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,pr"));
    	$arr = array();
 		foreach ($tra as $key) {$arr[$key->es] = $key->pr;}
		return $arr;
	}
	
	public static function getTradEN()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,en"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->en;}
		return $arr;
	}

	public static function getTradRU()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,ru"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->ru;}
		return $arr;
	}

	public static function getTradFR()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,fr"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->fr;}
		return $arr;
	}

	public static function getTradIT()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,it"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->it;}
		return $arr;
	}

	public static function getTradGE()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,ge"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->ge;}
		return $arr;
	}

	public static function getTradJA()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,ja"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->ja;}
		return $arr;
	}

	public static function getTradZH()
	{
		$tra = Traducciones::model()->findAll(array("select"=>"es,zh"));
		$arr = array();
		foreach ($tra as $key) {$arr[$key->es] = $key->zh;}
		return $arr;
	}



}
