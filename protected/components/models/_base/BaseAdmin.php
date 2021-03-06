<?php

/**
 * This is the model base class for the table "{{admin}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Admin".
 *
 * Columns in table "{{admin}}" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created_time
 * @property integer $updated_time
 * @property string $email
 * @property string $password
 * @property integer $type
 * @property string $name
 *
 */
abstract class BaseAdmin extends SModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{admin}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Admin|Admins', $n);
	}

	public static function representingColumn() {
		return 'email';
	}

	public function rules() {
		return array(
			array('created_time, updated_time, email, password, name', 'required'),
			array('active, created_time, updated_time, type', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>50),
			array('password', 'length', 'max'=>100),
			array('name', 'length', 'max'=>30),
			array('active, type', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, active, created_time, updated_time, email, password, type, name', 'safe', 'on'=>'search'),
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
			'email' => Yii::t('app', 'Email'),
			'password' => Yii::t('app', 'Password'),
			'type' => Yii::t('app', 'Type'),
			'name' => Yii::t('app', 'Name'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('active', $this->active);
		$criteria->compare('created_time', $this->created_time);
		$criteria->compare('updated_time', $this->updated_time);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('type', $this->type);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}