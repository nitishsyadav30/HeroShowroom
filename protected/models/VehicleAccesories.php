<?php

/**
 * This is the model class for table "{{vehicle_accesories}}".
 *
 * The followings are the available columns in table '{{vehicle_accesories}}':
 * @property integer $accessory_id
 * @property integer $fk_vehicle_id
 * @property string $acessory_name
 * @property string $acessory_description
 * @property string $added_on
 * @property integer $fk_added_by
 * @property string $updated_on
 * @property integer $fk_updated_by
 *
 * The followings are the available model relations:
 * @property Users $fkAddedBy
 * @property Vehicles $fkVehicle
 * @property Users $fkUpdatedBy
 */
class VehicleAccesories extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{vehicle_accesories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_vehicle_id, acessory_name, acessory_description, added_on, fk_added_by, updated_on, fk_updated_by', 'required'),
			array('fk_vehicle_id, fk_added_by, fk_updated_by', 'numerical', 'integerOnly'=>true),
			array('acessory_name', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('accessory_id, fk_vehicle_id, acessory_name, acessory_description, added_on, fk_added_by, updated_on, fk_updated_by', 'safe', 'on'=>'search'),
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
			'fkAddedBy' => array(self::BELONGS_TO, 'Users', 'fk_added_by'),
			'fkVehicle' => array(self::BELONGS_TO, 'Vehicles', 'fk_vehicle_id'),
			'fkUpdatedBy' => array(self::BELONGS_TO, 'Users', 'fk_updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'accessory_id' => 'Accessory',
			'fk_vehicle_id' => 'Fk Vehicle',
			'acessory_name' => 'Acessory Name',
			'acessory_description' => 'Acessory Description',
			'added_on' => 'Added On',
			'fk_added_by' => 'Fk Added By',
			'updated_on' => 'Updated On',
			'fk_updated_by' => 'Fk Updated By',
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

		$criteria->compare('accessory_id',$this->accessory_id);
		$criteria->compare('fk_vehicle_id',$this->fk_vehicle_id);
		$criteria->compare('acessory_name',$this->acessory_name,true);
		$criteria->compare('acessory_description',$this->acessory_description,true);
		$criteria->compare('added_on',$this->added_on,true);
		$criteria->compare('fk_added_by',$this->fk_added_by);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('fk_updated_by',$this->fk_updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VehicleAccesories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
