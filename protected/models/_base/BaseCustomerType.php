<?php

/**
 * This is the model base class for the table "{{customer_type}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CustomerType".
 *
 * Columns in table "{{customer_type}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created_time
 * @property integer $updated_time
 * @property string $name
 * @property double $service_price_percentage
 * @property double $weight_price
 * @property double $exchange_rate
 * @property double $volume_price
 *
 */
abstract class BaseCustomerType extends SModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{customer_type}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'CustomerType|CustomerTypes', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('created_time, updated_time, name, service_price_percentage, weight_price, exchange_rate', 'required'),
			array('active, created_time, updated_time', 'numerical', 'integerOnly'=>true),
			array('service_price_percentage, weight_price, exchange_rate, volume_price', 'numerical'),
			array('name', 'length', 'max'=>30),
			array('active, volume_price', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, active, created_time, updated_time, name, service_price_percentage, weight_price, exchange_rate, volume_price', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'active' => Yii::t('app', 'Active'),
			'created_time' => Yii::t('app', 'Created Time'),
			'updated_time' => Yii::t('app', 'Updated Time'),
			'name' => Yii::t('app', 'Name'),
			'service_price_percentage' => Yii::t('app', 'Service Price Percentage'),
			'weight_price' => Yii::t('app', 'Weight Price'),
			'exchange_rate' => Yii::t('app', 'Exchange Rate'),
			'volume_price' => Yii::t('app', 'Volume Price'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('active', $this->active);
		$criteria->compare('created_time', $this->created_time);
		$criteria->compare('updated_time', $this->updated_time);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('service_price_percentage', $this->service_price_percentage);
		$criteria->compare('weight_price', $this->weight_price);
		$criteria->compare('exchange_rate', $this->exchange_rate);
		$criteria->compare('volume_price', $this->volume_price);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}