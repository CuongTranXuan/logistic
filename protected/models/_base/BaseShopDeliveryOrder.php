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
 * @property double $total_weight
 * @property double $total_volume
 * @property integer $status
 * @property integer $china_delivery_time
 * @property integer $vietnam_delivery_time
 * @property string $block_id
 * @property double $num_block
 * @property double $purchase_price
 * @property integer $type
 * @property string $note
 * @property string $image_url
 * @property integer $user_id
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
		return 'delivery_order_code';
	}

	public function rules() {
		return array(
			array('created_time, updated_time, order_id', 'required'),
			array('active, created_time, updated_time, order_id, status, china_delivery_time, vietnam_delivery_time, type, user_id', 'numerical', 'integerOnly'=>true),
			array('total_weight, total_volume, num_block, purchase_price', 'numerical'),
			array('delivery_order_code, block_id', 'length', 'max'=>50),
			array('note', 'length', 'max'=>400),
			array('image_url', 'length', 'max'=>500),
			array('active, delivery_order_code, total_weight, total_volume, status, china_delivery_time, vietnam_delivery_time, block_id, num_block, purchase_price, type, note, image_url, user_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, active, created_time, updated_time, order_id, delivery_order_code, total_weight, total_volume, status, china_delivery_time, vietnam_delivery_time, block_id, num_block, purchase_price, type, note, image_url, user_id', 'safe', 'on'=>'search'),
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
			'total_weight' => Yii::t('app', 'Total Weight'),
			'total_volume' => Yii::t('app', 'Total Volume'),
			'status' => Yii::t('app', 'Status'),
			'china_delivery_time' => Yii::t('app', 'China Delivery Time'),
			'vietnam_delivery_time' => Yii::t('app', 'Vietnam Delivery Time'),
			'block_id' => Yii::t('app', 'Block'),
			'num_block' => Yii::t('app', 'Num Block'),
			'purchase_price' => Yii::t('app', 'Purchase Price'),
			'type' => Yii::t('app', 'Type'),
			'note' => Yii::t('app', 'Note'),
			'image_url' => Yii::t('app', 'Image Url'),
			'user_id' => Yii::t('app', 'User'),
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
		$criteria->compare('total_weight', $this->total_weight);
		$criteria->compare('total_volume', $this->total_volume);
		$criteria->compare('status', $this->status);
		$criteria->compare('china_delivery_time', $this->china_delivery_time);
		$criteria->compare('vietnam_delivery_time', $this->vietnam_delivery_time);
		$criteria->compare('block_id', $this->block_id, true);
		$criteria->compare('num_block', $this->num_block);
		$criteria->compare('purchase_price', $this->purchase_price);
		$criteria->compare('type', $this->type);
		$criteria->compare('note', $this->note, true);
		$criteria->compare('image_url', $this->image_url, true);
		$criteria->compare('user_id', $this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}