<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $vericode
 * @property string $username
 * @property integer $gender
 * @property string $seeking
 * @property string $birthday
 * @property integer $country_id
 * @property string $about_me
 * @property integer $ethnicity
 * @property integer $height
 * @property integer $body
 * @property integer $eyes
 * @property integer $hair
 * @property integer $smoke
 * @property integer $drink
 * @property integer $education
 * @property integer $marital_status
 * @property integer $status
 * @property string $living_current
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
    public $bday,$bmonth,$byear,$newpassword,$newpasswordagain;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
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
			array('gender, country_id, ethnicity, height, body, eyes, hair, smoke, drink, education, marital_status', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, vericode, username, living_current', 'length', 'max'=>255),
			array('email', 'length', 'max'=>155),
            array('email, username', 'unique' ),
			array('password', 'length', 'max'=>40),
			array('role', 'length', 'max'=>20),
			array('birthday', 'length', 'max'=>200),
			array('about_me', 'safe'),
            array('email, username, password, role', 'required', 'on'=>'createadmin' ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, lastname, email, password, role, vericode, username, gender, seeking, birthday, country_id, about_me, ethnicity, height, body, eyes, hair, smoke, drink, education, marital_status, living_current', 'safe', 'on'=>'search'),
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
			'firstname' => Yii::t('global', 'Firstname'),
			'lastname' => Yii::t('global', 'Lastname'),
			'email' => Yii::t('global', 'Email'),
			'password' => Yii::t('global', 'Password'),
			'role' => Yii::t('global', 'Role'),
			'vericode' => Yii::t('global', 'Vericode'),
			'username' => Yii::t('global', 'Username'),
			'gender' => Yii::t('global', 'Gender'),
			'seeking' => Yii::t('global', 'Seeking'),
			'birthday' => Yii::t('global', 'Birthday'),
			'country_id' => Yii::t('global', 'Country'),
			'about_me' => Yii::t('global', 'About Me'),
			'ethnicity' => Yii::t('global', 'My ethnicity is'),
			'height' => Yii::t('global', 'My height is'),
			'body' => Yii::t('global', 'My Body type is'),
			'eyes' => Yii::t('global', 'My eyes are'),
			'hair' => Yii::t('global', 'My hair is'),
			'smoke' => Yii::t('global', 'I smoke'),
			'drink' => Yii::t('global', 'I drink'),
			'education' => Yii::t('global', 'My education is'),
			'marital_status' => Yii::t('global', 'My marital status is'),
			'living_current' => Yii::t('global', 'I am currently living'),
			'newpassword' => Yii::t('global', 'New Password'),
			'newpasswordagain' => Yii::t('global', 'New Password Again'),
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('vericode',$this->vericode,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('seeking',$this->seeking);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('about_me',$this->about_me,true);
		$criteria->compare('ethnicity',$this->ethnicity);
		$criteria->compare('height',$this->height);
		$criteria->compare('body',$this->body);
		$criteria->compare('eyes',$this->eyes);
		$criteria->compare('hair',$this->hair);
		$criteria->compare('smoke',$this->smoke);
		$criteria->compare('drink',$this->drink);
		$criteria->compare('education',$this->education);
		$criteria->compare('marital_status',$this->marital_status);
		$criteria->compare('living_current',$this->living_current,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    function checkExistUser($username){
        return Users::model()->find(array(
                'select'=>'username',
                'condition'=>'username=:username',
                'params'=>array(':username'=>$username))
        );
    }

    public function getFormatDate($date){
        if($date<10)
            return "0".$date;
        return $date;
    }
    public function hashPassword( $password, $salt )
    {
        return sha1( md5('salt') . $password );
    }

    function checkRoleLogin($username){
        $role = Users::model()->findByAttributes(array('username'=>$username));
        if($role->role == 'guest')
            return false;
        return true;
    }
}