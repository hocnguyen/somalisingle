<?php

class UsersController extends SiteBaseController {
    public function init()
	{
		parent::init();
		
		$this->breadcrumbs[ Yii::t('global', 'Users') ] = array('users/index');
		$this->pageTitle[] = Yii::t('global', 'Users');
	}
    
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
//	public function actionAdmin()
//	{
//		$dataProvider=new CActiveDataProvider('Users');
//		$this->render('admin',array(
//			'dataProvider'=>$dataProvider,
//		));
//	}
    public function actionadmin()
	{
        if(Yii::app()->user->role == 'admin') $this->redirect('/admin');
		$model = new LoginForm;
		
		if( isset($_POST['LoginForm']) )
		{
			$model->username   = $_POST['LoginForm']['email'];
            $model->attributes = $_POST['LoginForm'];
			if( $model->validate() )
			{
				
                // Login
				$identity = new InternalIdentity($model->username, $model->password);
				if($identity->authenticate())
				{
					// Member authenticated, Login
					Yii::app()->user->setFlash('success', Yii::t('login', 'Thanks. You are now logged in.'));
					Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));
				}
                else{
                    Yii::app()->user->setFlash('error', $identity->errorMessage);
                }
				
				// Redirect
				if(Yii::app()->user->role == 'admin') $this->redirect('/admin');
				else $this->redirect(Yii::app()->homeUrl);
			}
		}
		
		// Add page breadcrumb and title
		$this->pageTitle[] = Yii::t('global', 'Login');
		// $this->breadcrumbs[ Yii::t('global', 'Login') ] = '';
		
		$this->renderPartial('admin', array('model'=>$model));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    function actionCheckUser(){
        $username = $_GET['username'];
        if($username){
            if(Users::model()->checkExistUser($username)){
                echo Yii::t('global','Username already exists');
            }
        }
    }
    function actionRegistration($id){
        $checkSession = Yii::app()->session['regStep1'];
        if($checkSession ==$id){
            $model =  Users::model()->findByPk($id);
            if(isset($_POST['Users']))
            {
                $model->attributes=$_POST['Users'];
                $living_current = $_POST['Users']['living_current'];
                $items='';
                foreach($living_current as $item){
                    $items.= $item.',';
                }
                $model->living_current=$items;
                $seeking = $_POST['Users']['seeking'];
                $itemsSeeking ='';
                foreach($seeking as $itemSeeking){
                    $itemsSeeking.=$itemSeeking.",";
                }
                $model->seeking=$itemsSeeking;
                $model->vericode = Users::model()->hashPassword(time(),$model->email);
                $model->status = 0;
                $model->about_me = $_POST['about_me'];
                if($model->save()){
                    $homelink = '<a href="' . $this->createAbsoluteUrl('/') . '" target="_blank">' . Yii::app()->name . '</a>';
                    $actlink = $this->createAbsoluteUrl('/users/verify') . '?vericode='.$model->vericode;
                    $actlink = '<a href="'. $actlink . '" target="_blank">' . $actlink . '</a>';

                    $email = EmailTemplates::model()->findByAttributes(array('alias'=>'register-member'));
                    $message = Yii::t('global', $email->email_content,array(
                        '{username}' => $model->firstname." ".$model->lastname,
                        '{team}'=>Yii::app()->name,
                        '{homelink}' => $homelink,
                        '{link}' => $actlink ));
                    $message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));
                    Utils::sendMail(Yii::app()->params['emailout'], $model->email,  $email->email_subject, $message);
                    $this->redirect(array('users/success','id'=>$model->id));
                }
            }
            $this->render('registration',compact('model'));
        } else {
            $this->redirect('/');
        }
    }

    function actionSuccess($id){
        $model =  Users::model()->findByPk($id);
        unset(Yii::app()->session['regStep1']);
        $this->render('success',compact('model'));
    }


    public function actionVerify()
    {
        $model =  new Users();
        $code = $_GET['vericode'];
        if($code != '')
        {
            $vericode = Users::model()->findByAttributes(array('vericode'=>$code));
            if($vericode){
                Users::model()->updateByPk($vericode->id, array('role'=>'user'));
                Yii::app()->user->setFlash('success', Yii::t('login', 'You have actived your account succesful. Please login to start!'));
                $this->redirect('login',compact('model'));
            }

        }

    }
    public function actionLogin()
    {
        $model=new LoginForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            if( $model->validate() )
            {
                // Login
                $identity = new InternalIdentity($model->username, $model->password);
                if($identity->authenticate())
                {
                    // Member authenticated, Login
                    $check_role_login = Users::model()->checkRoleLogin($model->username);
                    if($check_role_login == 1){
                        // Member authenticated, Login
                        Yii::app()->user->setFlash('success', Yii::t('global', 'Thanks. You are now logged in.'));
                        Yii::app()->user->login($identity, (Yii::app()->params['loggedInDays'] * 60 * 60 * 24 ));
                        if(Yii::app()->user->role == 'admin') $this->redirect('/admin');
                        else $this->redirect('/home');
                    } else  if(($check_role_login ==2)){
                        Yii::app()->user->setFlash('error', Yii::t('login', 'Please check your new email to active account before login again !'));
                    } else {
                        Yii::app()->user->setFlash('error', Yii::t('login', 'Please check your email to active account before login !'));
                    }

                }
                else{
                    Yii::app()->user->setFlash('error', $identity->errorMessage);
                }
            }
        }

        $this->render('login',array(
            'model'=>$model,
        ));
    }
    public function actionLogout()
    {
        // Guests are not allowed
        if( Yii::app()->user->isGuest )
        {
            $this->redirect(Yii::app()->homeUrl);
        }
        Yii::app()->user->logout(true);
        Yii::app()->user->setFlash('success', Yii::t('global', 'You are now logged out.'));
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionHome(){
        if(!Yii::app()->user->isGuest){
            $model = Users::model()->findByPk(Yii::app()->user->id);
            $photo = UserPhotoGalleries::model()->findByAttributes(array('user_id'=>Yii::app()->user->id,'is_photo_main'=>1));
            $criteria = new CDbCriteria();
            $criteria->condition="user_id=".Yii::app()->user->id;
            $criteria->limit = 5;
            $allPhoto = UserPhotoGalleries::model()->findAll($criteria);
            $this->render('index',compact('model','photo','allPhoto'));
        } else {
            $this->redirect('/');
        }
    }

    public function actionMySettings(){

        if(!Yii::app()->user->isGuest){
            $user = new Users();
            $model =  MySettings::model()->findByAttributes(array('user_id'=>Yii::app()->user->id));
            if(!$model){
                $model =  new MySettings();
            }

            if(isset($_POST['Users']['newpassword'])) {
                Users::model()->updateByPk(Yii::app()->user->id, array( 'password' => Users::model()->hashPassword($_POST['Users']['newpassword'], '') ));
                // Redirect
                Yii::app()->user->setFlash('success', Yii::t('global', 'Changed password.'));
                $this->redirect('/users/mysettings');
            }

            if(isset($_POST['Users']['newemail'])){
                $newEmail = Users::model()->updateByPk(Yii::app()->user->id, array( 'email' => $_POST['Users']['newemail']));
                $homelink = '<a href="' . $this->createAbsoluteUrl('/') . '" target="_blank">' . Yii::app()->name . '</a>';
                $email = EmailTemplates::model()->findByAttributes(array('alias'=>'change-email'));
                $message = Yii::t('global', $email->email_content,array(
                    '{username}' => $newEmail->firstname." ".$newEmail->lastname,
                    '{team}'=>Yii::app()->name,
                    '{homelink}' => $homelink));
                $message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));
                Utils::sendMail(Yii::app()->params['emailout'], $newEmail->email,  $email->email_subject, $message);
                // Redirect
                Yii::app()->user->setFlash('success', Yii::t('global', 'Changed email.'));
                $this->redirect('/users/mysettings');
            }

            if(isset($_POST['MySettings'])){
                $model->attributes=$_POST['MySettings'];
                $model->user_id = Yii::app()->user->id;
                $model->save();
            }
            $this->render('my_settings',compact('model','user'));
        } else {
            $this->redirect('/');
        }
    }
    public function actionDeleteUser(){
        $id = Yii::app()->user->id;
        $this->loadModel($id)->delete();
        Yii::app()->user->logout(true);

    }

    public function actionlostpassword()
    {
        $model =  new Users();
        if(isset($_POST['User'])){
            $email=$_POST['User']['email'];
            $member = Users::model()->findByAttributes(array('email' => $email));
            if($member){
                $password = $member->generatePassword(5, 10);
                $hashedPassword = $member->hashPassword( $password);
                $message = Yii::t('global', "Dear {username},<br /><br />
    									We have reseted your password successfully.<br /><br />
    									You new password is: <b>{password}</b><br />",
                    array( '{username}' => $member->firstname." ".$member->lastname, '{password}' => $password ));

                $message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));
                Utils::sendMail(Yii::app()->params['emailout'], $member->email, Yii::t('global', 'Password Reset Completed'), $message);

                Users::model()->updateByPk($member->id, array('password'=>$hashedPassword));

                Yii::app()->user->setFlash('success', Yii::t('global', 'Thank You. Your password was reset. Please check your email for you new generated password.'));

            } else {
                Yii::app()->user->setFlash('error', Yii::t('login', 'Not found this email. Please check again!'));
            }
        }
        $this->render('loss-password',compact('model'));
    }

    public function actionSaveRating(){
        $score      = intval( $_GET['score'] );
        $photo_id = intval( $_GET['id'] );

        $result = Ratings::model()->saveRating( $score, $photo_id);
        if($result == false) {
            echo 'false';
        } else {echo 'true';}


    }
}
