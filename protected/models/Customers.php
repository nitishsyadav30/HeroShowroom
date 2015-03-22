<?php

/**
 * This is the model class for table "{{customers}}".
 *
 * The followings are the available columns in table '{{customers}}':
 * @property integer $c_id
 * @property string $c_name
 * @property string $c_date_of_birth
 * @property string $c_address
 * @property string $c_city
 * @property string $c_state
 * @property string $c_country
 * @property string $c_mobile
 * @property string $c_file_path
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        private $file;
        public function tableName()
	{
		return '{{customers}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('c_name, c_date_of_birth, c_address, c_city, c_state, c_country, c_mobile, c_file_path,file,c_bill_id', 'required'),
			array('c_name', 'length', 'max'=>50),
			array('c_city, c_state, c_country', 'length', 'max'=>15),
			array('c_mobile', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('c_id, c_bill_id, c_name, c_date_of_birth, c_address, c_city, c_state, c_country, c_mobile, c_file_path', 'safe', 'on'=>'search'),
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
			'c_id' => 'C',
                        'c_bill_id'=>'Bill Number',
			'c_name' => 'Customer Name',
			'c_date_of_birth' => 'Date Of Birth',
			'c_address' => 'Address',
			'c_city' => 'City',
			'c_state' => 'State',
			'c_country' => 'Country',
			'c_mobile' => 'Mobile',
			//'c_file_path' => 'File Path',
                        'file' => 'Customer Docs',
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

		$criteria->compare('c_id',$this->c_id);
                $criteria->compare('c_bill_id',$this->c_bill_id);
		$criteria->compare('c_name',$this->c_name,true);
		$criteria->compare('c_date_of_birth',$this->c_date_of_birth,true);
		$criteria->compare('c_address',$this->c_address,true);
		$criteria->compare('c_city',$this->c_city,true);
		$criteria->compare('c_state',$this->c_state,true);
		$criteria->compare('c_country',$this->c_country,true);
		$criteria->compare('c_mobile',$this->c_mobile,true);
		$criteria->compare('c_file_path',$this->c_file_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
