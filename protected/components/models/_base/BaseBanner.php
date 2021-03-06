<?php

/**
 * This is the model base class for the table "{{banner}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Banner".
 *
 * Columns in table "{{banner}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created_time
 * @property integer $updated_time
 * @property string $image
 * @property string $url
 * @property integer $order_index
 *
 */
abstract class BaseBanner extends SModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{banner}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Banner|Banners', $n);
	}

	public static function representingColumn() {
		return 'image';
	}

	public function rules() {
		return array(
			array('created_time, updated_time, image', 'required'),
			array('active, created_time, updated_time, order_index', 'numerical', 'integerOnly'=>true),
			array('image, url', 'length', 'max'=>100),
			array('active, url, order_index', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, active, created_time, updated_time, image, url, order_index', 'safe', 'on'=>'search'),
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
			'image' => Yii::t('app', 'Image'),
			'url' => Yii::t('app', 'Url'),
			'order_index' => Yii::t('app', 'Order Index'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('active', $this->active);
		$criteria->compare('created_time', $this->created_time);
		$criteria->compare('updated_time', $this->updated_time);
		$criteria->compare('image', $this->image, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('order_index', $this->order_index);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}