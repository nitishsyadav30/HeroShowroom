<?php

/**
 * This is the model class for table "{{vehicles}}".
 *
 * The followings are the available columns in table '{{vehicles}}':
 * @property integer $vehicle_id
 * @property string $vehicle_name
 * @property string $vehicle_model
 * @property string $vehicle_make
 * @property string $vehicle_year
 * @property string $vehicle_color
 * @property string $vehicle_key_no
 * @property string $vehicle_frame_no
 * @property string $vehicle_engine_no
 * @property string $vehicle_battery_make
 * @property string $vehicle_battery_no
 * @property double $vehicle_price
 * @property integer $vehicle_quantity
 * @property string $vehicle_description
 * @property string $added_on
 * @property integer $fk_added_by
 * @property string $updated_on
 * @property integer $fk_updated_by
 *
 * The followings are the available model relations:
 * @property Bills[] $bills
 * @property VehicleAccesories[] $vehicleAccesories
 * @property Users $fkAddedBy
 * @property Users $fkUpdatedBy
 */
class Vehicles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{vehicles}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vehicle_name, vehicle_model, vehicle_make, vehicle_year, vehicle_color, vehicle_key_no, vehicle_frame_no, vehicle_engine_no, vehicle_battery_make, vehicle_battery_no, vehicle_price, vehicle_quantity, vehicle_description', 'required'),
			array('vehicle_quantity, fk_added_by, fk_updated_by', 'numerical', 'integerOnly'=>true),
			array('vehicle_price', 'numerical'),
			array('vehicle_name, vehicle_model', 'length', 'max'=>200),
                        
			array('vehicle_make', 'length', 'max'=>50),
			array('vehicle_year', 'length', 'max'=>10),
			array('vehicle_color', 'length', 'max'=>20),
			array('vehicle_key_no, vehicle_frame_no, vehicle_engine_no, vehicle_battery_make, vehicle_battery_no', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vehicle_id, vehicle_name, vehicle_model, vehicle_make, vehicle_year, vehicle_color, vehicle_key_no, vehicle_frame_no, vehicle_engine_no, vehicle_battery_make, vehicle_battery_no, vehicle_price, vehicle_quantity, vehicle_description, added_on, fk_added_by, updated_on, fk_updated_by', 'safe', 'on'=>'search'),
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
			'bills' => array(self::HAS_MANY, 'Bills', 'fk_vehicle_id'),
			'vehicleAccesories' => array(self::HAS_MANY, 'VehicleAccesories', 'fk_vehicle_id'),
			'fkAddedBy' => array(self::BELONGS_TO, 'Users', 'fk_added_by'),
			'fkUpdatedBy' => array(self::BELONGS_TO, 'Users', 'fk_updated_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vehicle_id' => 'Vehicle',
			'vehicle_name' => 'Vehicle Name',
			'vehicle_model' => 'Vehicle Model',
			'vehicle_make' => 'Vehicle Make',
			'vehicle_year' => 'Vehicle Year',
			'vehicle_color' => 'Vehicle Color',
			'vehicle_key_no' => 'Vehicle Key No',
			'vehicle_frame_no' => 'Vehicle Frame No',
			'vehicle_engine_no' => 'Vehicle Engine No',
			'vehicle_battery_make' => 'Vehicle Battery Make',
			'vehicle_battery_no' => 'Vehicle Battery No',
			'vehicle_price' => 'Vehicle Price',
			'vehicle_quantity' => 'Vehicle Quantity',
			'vehicle_description' => 'Vehicle Description',
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

		$criteria->compare('vehicle_id',$this->vehicle_id);
		$criteria->compare('vehicle_name',$this->vehicle_name,true);
		$criteria->compare('vehicle_model',$this->vehicle_model,true);
		$criteria->compare('vehicle_make',$this->vehicle_make,true);
		$criteria->compare('vehicle_year',$this->vehicle_year,true);
		$criteria->compare('vehicle_color',$this->vehicle_color,true);
		$criteria->compare('vehicle_key_no',$this->vehicle_key_no,true);
		$criteria->compare('vehicle_frame_no',$this->vehicle_frame_no,true);
		$criteria->compare('vehicle_engine_no',$this->vehicle_engine_no,true);
		$criteria->compare('vehicle_battery_make',$this->vehicle_battery_make,true);
		$criteria->compare('vehicle_battery_no',$this->vehicle_battery_no,true);
		$criteria->compare('vehicle_price',$this->vehicle_price);
		$criteria->compare('vehicle_quantity',$this->vehicle_quantity);
		$criteria->compare('vehicle_description',$this->vehicle_description,true);
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
	 * @return Vehicles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
