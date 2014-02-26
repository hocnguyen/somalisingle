<?php

/**
 * This is the model class for table "my_settings".
 *
 * The followings are the available columns in table 'my_settings':
 * @property integer $id
 * @property string $date_format
 * @property string $date_time_format
 * @property integer $search_match
 * @property integer $allow_rate_photo
 * @property integer $email_notification
 * @property integer $allow_comment
 * @property integer $timezone_id
 * @property integer $receive_newsletter
 * @property integer $user_id
 */
class MySettings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MySettings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'my_settings';
	}
    public function behaviors()
    {
        return array('datetimeI18NBehavior' => array('class' => 'ext.DateTimeI18NBehavior')); 
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('search_match, allow_rate_photo, email_notification, allow_comment, timezone_id, receive_newsletter, user_id', 'numerical', 'integerOnly'=>true),
			array('date_format, date_time_format', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_format, date_time_format, search_match, allow_rate_photo, email_notification, allow_comment, timezone_id, receive_newsletter, user_id', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('global', 'ID'),
			'date_format' => Yii::t('global', 'Default date format'),
			'date_time_format' => Yii::t('global', 'Date and time format'),
			'search_match' => Yii::t('global', 'How often do you want to receive your search matches? (days)'),
			'allow_rate_photo' => Yii::t('global', 'Allow my photos to be rated?'),
			'email_notification' => Yii::t('global', 'Send me email notifications when I receive messages?'),
			'allow_comment' => Yii::t('global', 'Allow comments on my profile?'),
			'timezone_id' => Yii::t('global', 'Select your timezone '),
			'receive_newsletter' => Yii::t('global', 'I want to receive occasional newsletters'),
			'user_id' => Yii::t('global', 'User'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_format',$this->date_format,true);
		$criteria->compare('date_time_format',$this->date_time_format,true);
		$criteria->compare('search_match',$this->search_match);
		$criteria->compare('allow_rate_photo',$this->allow_rate_photo);
		$criteria->compare('email_notification',$this->email_notification);
		$criteria->compare('allow_comment',$this->allow_comment);
		$criteria->compare('timezone_id',$this->timezone_id);
		$criteria->compare('receive_newsletter',$this->receive_newsletter);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}