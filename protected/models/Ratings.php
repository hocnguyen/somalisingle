<?php

/**
 * This is the model class for table "ratings".
 *
 * The followings are the available columns in table 'ratings':
 * @property integer $id
 * @property double $score
 * @property integer $photo_id
 * @property string $created
 * @property string $updated
 * @property string $ip
 * @property integer $user_id
 */
class Ratings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ratings the static model class
	 */
    public $sumRating,$countRating;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ratings';
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
			array('score, photo_id', 'required'),
			array('photo_id, user_id', 'numerical', 'integerOnly'=>true),
			array('score', 'numerical'),
			array('ip', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, score, photo_id, created, updated, ip, user_id', 'safe', 'on'=>'search'),
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
			'score' => Yii::t('global', 'Score'),
			'photo_id' => Yii::t('global', 'Photo'),
			'created' => Yii::t('global', 'Created'),
			'updated' => Yii::t('global', 'Updated'),
			'ip' => Yii::t('global', 'Ip'),
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
		$criteria->compare('score',$this->score);
		$criteria->compare('photo_id',$this->photo_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function getRating($id){
        $sql = "SELECT sum(score) as sumRating, count(id) as countRating FROM ratings WHERE photo_id = ".$id;
        $rating = Ratings::model()->findBySql($sql);
        if($rating->countRating >0){
            $result = $rating->sumRating/$rating->countRating;
        } else {
            $result = 0;
        }
        return $result;

    }

    public function saveRating( $score, $photo_id){
        $rating = new Ratings();
        $rating->photo_id = $photo_id;
        $rating->score = $score;
        $rating->user_id = Yii::app()->user->id;
        $date = date('Y-m-d');
        if(!self::model()->isRated($photo_id)){
            $rating->save();
            return true;
        }else{
            return false;
        }
    }

    public function isRated($photo_id){
        $sql = "SELECT * FROM ratings WHERE photo_id = ".$photo_id." AND user_id = ".Yii::app()->user->id;
        $isRated = Yii::app()->db->createCommand($sql)->queryAll();
        if(count($isRated)>0){
            return true;
        }
        else{
            return false;
        }
    }
}