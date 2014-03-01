<?php

/**
 * This is the model class for table "user_photo_galleries".
 *
 * The followings are the available columns in table 'user_photo_galleries':
 * @property integer $id
 * @property integer $user_id
 * @property string $filename
 * @property string $description
 * @property integer $is_private
 * @property integer $is_comment
 * @property integer $is_photo_main
 * @property string $created
 * @property string $updated
 */
class UserPhotoGalleries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserPhotoGalleries the static model class
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
		return 'user_photo_galleries';
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
			//array('created, updated', 'required'),
			array('user_id, is_private, is_comment, is_photo_main', 'numerical', 'integerOnly'=>true),
			array('filename', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, filename, description, is_private, is_comment, is_photo_main, created, updated', 'safe', 'on'=>'search'),
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
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
            'commentPhoto'=>array(self::STAT,'PhotoComments','photo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('global', 'ID'),
			'user_id' => Yii::t('global', 'User'),
			'filename' => Yii::t('global', 'Filename'),
			'description' => Yii::t('global', 'Description'),
			'is_private' => Yii::t('global', 'Private photo?'),
			'is_comment' => Yii::t('global', 'Allow comments on photo?'),
			'is_photo_main' => Yii::t('global', 'Main profile photo?'),
			'created' => Yii::t('global', 'Created'),
			'updated' => Yii::t('global', 'Updated'),
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_private',$this->is_private);
		$criteria->compare('is_comment',$this->is_comment);
		$criteria->compare('is_photo_main',$this->is_photo_main);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    function showImage(){
        return '<a class="fancybox" href="/uploads/product_gallery/'.$this->filename.'" rel="group">
            <img class="img-polaroid" src="/uploads/product_gallery/'.$this->filename.'" style="height: 50px;" />
            </a>';
    }

    public function beforeSave(){
        //$this->created = date('Y-m-d H:i:s');
        //$this->updated = date('Y-m-d H:i:s');
        return parent::beforeSave();
    }

    public function getStatusPhoto($status){
        if($status ==1)
            return Yii::t('global','Private');
        return Yii::t('global','Public');
    }

    public function getAvatar($user_id){
        $photo = UserPhotoGalleries::model()->findByAttributes(array('user_id'=>$user_id,'is_photo_main'=>1));
        return $photo->filename ;
    }

}