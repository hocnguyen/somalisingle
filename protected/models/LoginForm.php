<?php
/**
 * Login form model class
 */
class LoginForm extends CFormModel
{
	/**
	 * @var string - password
	 */
	public $password;
	
	/**
	 * @var string - email
	 */
	public $username;

	/**
	 * @var string - captcha
	 */
	//public $verifyCode;
	
	/**
	 * @var boolean - remember me
	 */
	public $rememberme = false;
	
	/**
	 * table data rules
	 *
	 * @return array
	 */
	public function rules()
	{
		return array(
			array('username, password', 'required'),
			
			//array('password', 'length', 'min' => 3, 'max' => 32),
			//array('email', 'length', 'min' => 3, 'max' => 55),
			array('rememberme', 'boolean'),
			array('password', 'authenticate'),
			//array('verifyCode', 'captcha'),
		);
	}
	
	/**
	 * @return null on success error on failure
	 */
	public function authenticate()
	{
		$identity = new InternalIdentity($this->username, $this->password);
		if($identity->authenticate())
		{
			// Member authenticated
			return true;
		}
		else
		{
			$this->addError('password', $identity->errorMessage);
		}
	}
	
	/**
	 * Attribute values
	 *
	 * @return array
	 */
	public function attributeLabels()
	{
		return array(
			'username' => Yii::t('members', 'Username'),
			'password' => Yii::t('members', 'Password'),
			//'verifyCode' => Yii::t('members', 'Security Code'),
		);
	}
	
}