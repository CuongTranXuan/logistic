<?php

/**
 * This is the model base class for the table "{{shop_delivery_order}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ShopDeliveryOrder".
 *
 * Columns in table "{{shop_delivery_order}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created_time
 * @property integer $updated_time
 * @property integer $order_id
 * @property string $delivery_order_code
 * @property string $shop_name
 * @property double $delivery_price_ndt
 * @property double $total_weight
 * @property integer $status
 * @property double $real_price
 * @property string $shop_id
 * @property integer $china_delivery_time
 * @property integer $vietnam_delivery_time
 * @property string $order_code
 *
 */
abstract class BaseShopDeliveryOrder extends SModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{shop_delivery_order}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ShopDeliveryOrder|ShopDeliveryOrders', $n);
	}

	public static function representingColumn() {
		return 'shop_name';
	}

	public function rules() {
		return array(
			array('created_time, updated_time, order_id, shop_name, delivery_price_ndt, total_weight, real_price', 'required'),
			array('active, created_time, updated_time, order_id, status, china_delivery_time, vietnam_delivery_time', 'numerical', 'integerOnly'=>true),
			array('delivery_price_ndt, total_weight, real_price', 'numerical'),
			array('delivery_order_code, shop_id, order_code', 'length', 'max'=>50),
			array('shop_name', 'length', 'max'=>100),
			array('active, delivery_order_code, status, shop_id, china_delivery_time, vietnam_delivery_time, order_code', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, active, created_time, updated_time, order_id, delivery_order_code, shop_name, delivery_price_ndt, total_weight, status, real_price, shop_id, china_delivery_time, vietnam_delivery_time, order_code', 'safe', 'on'=>'search'),
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
			'order_id' => Yii::t('app', 'Order'),
			'delivery_order_code' => Yii::t('app', 'Delivery Order Code'),
			'shop_name' => Yii::t('app', 'Shop Name'),
			'delivery_price_ndt' => Yii::t('app', 'Delivery Price Ndt'),
			'total_weight' => Yii::t('app', 'Total Weight'),
			'status' => Yii::t('app', 'Status'),
			'real_price' => Yii::t('app', 'Real Price'),
			'shop_id' => Yii::t('app', 'Shop'),
			'china_delivery_time' => Yii::t('app', 'China Delivery Time'),
			'vietnam_delivery_time' => Yii::t('app', 'Vietnam Delivery Time'),
			'order_code' => Yii::t('app', 'Order Code'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('active', $this->active);
		$criteria->compare('created_time', $this->created_time);
		$criteria->compare('updated_time', $this->updated_time);
		$criteria->compare('order_id', $this->order_id);
		$criteria->compare('delivery_order_code', $this->delivery_order_code, true);
		$criteria->compare('shop_name', $this->shop_name, true);
		$criteria->compare('delivery_price_ndt', $this->delivery_price_ndt);
		$criteria->compare('total_weight', $this->total_weight);
		$criteria->compare('status', $this->status);
		$criteria->compare('real_price', $this->real_price);
		$criteria->compare('shop_id', $this->shop_id, true);
		$criteria->compare('china_delivery_time', $this->china_delivery_time);
		$criteria->compare('vietnam_delivery_time', $this->vietnam_delivery_time);
		$criteria->compare('order_code', $this->order_code, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}