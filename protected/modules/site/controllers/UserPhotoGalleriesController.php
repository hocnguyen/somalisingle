<?php

class UserPhotoGalleriesController extends SiteBaseController {
    public function init()
	{
		parent::init();
		
		$this->breadcrumbs[ Yii::t('global', 'User Photo Galleries') ] = array('user-photo-galleries/index');
		$this->pageTitle[] = Yii::t('global', 'User Photo Galleries');
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
		$model=new UserPhotoGalleries;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserPhotoGalleries']))
		{
			$model->attributes=$_POST['UserPhotoGalleries'];
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

		if(isset($_POST['UserPhotoGalleries']))
		{
			$model->attributes=$_POST['UserPhotoGalleries'];
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
		$model=new UserPhotoGalleries('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserPhotoGalleries']))
			$model->attributes=$_GET['UserPhotoGalleries'];
        $criteria = new CDbCriteria();
        $criteria->condition=' is_private =0';
        $criteria->limit = 5;
        $criteria->order = 'created DESC';
        $more_photo = UserPhotoGalleries::model()->findAll($criteria);
		$this->render('index',array(
			'model'=>$model,
            'more_photo'=>$more_photo
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$dataProvider=new CActiveDataProvider('UserPhotoGalleries');
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=UserPhotoGalleries::model()->findByPk((int)$id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-photo-galleries-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionMorePhoto(){

        $criteria =  new CDbCriteria();
        $criteria->condition=' is_private =0';
        $criteria->order = 'created DESC';
        $photos =  new CActiveDataProvider('UserPhotoGalleries',array(
            'criteria'=>$criteria,
        ));
        $this->render('more_photo',compact('photos'));
    }
    public function actionPopularPhoto(){
        $criteria =  new CDbCriteria();
        $criteria->condition=' is_private =0';
        $criteria->order = 'views DESC';
        $photos =  new CActiveDataProvider('UserPhotoGalleries',array(
            'criteria'=>$criteria,

        ));
        $this->render('popular_photo',compact('photos'));
    }
    public function actionDiscussPhoto(){

        $criteria =  new CDbCriteria();

        $criteria->condition=' is_private =0';
        //$criteria->order = 'commentPhoto DESC';
        $photos =  new CActiveDataProvider('UserPhotoGalleries',array(
            'criteria'=>$criteria,

        ));
        $this->render('discuss_photo',compact('photos'));
    }

    public function actionMyPhoto(){
        if(!Yii::app()->user->isGuest){
            $criteria = new CDbCriteria();
            $criteria->condition = 'user_id = '.Yii::app()->user->id;
            $myphoto =  new CActiveDataProvider('UserPhotoGalleries',array(
                'criteria'=>$criteria,
            ));
            $this->render('my_photos',compact('myphoto'));
        }
    }

    public function actionUploadPhoto(){
        $model = new UserPhotoGalleries();
        if(isset($_POST['UserPhotoGalleries'])){
            $model->attributes=$_POST['UserPhotoGalleries'];
            $uploadedFile=CUploadedFile::getInstance($model,'filename');
            $model->user_id = Yii::app()->user->id;
            if(!empty($uploadedFile)) {
                $rnd = rand(0,9999);
                $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                $model->filename = $fileName;
            }
            else{
                $fileName = '';
            }
            $model->updated = date('Y-m-d H:i:s');
            $model->created =  date('Y-m-d H:i:s');
            if($model->is_photo_main ==1){
                UserPhotoGalleries::model()->updateAll(array('is_photo_main'=>0));
            }
            if($model->save()){

                if(!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/photos/'.$fileName);
                }
                $this->redirect('myphoto');
            }
        }
        $this->render('upload_photo',compact('model'));
    }

    public function actionUpdatePhoto(){
        $id=$_GET['id'];
        $model = UserPhotoGalleries::model()->findByPk($id);
        $oldimages = $model->filename;
        if(isset($_POST['UserPhotoGalleries'])){
            $model->attributes=$_POST['UserPhotoGalleries'];
            $uploadedFile=CUploadedFile::getInstance($model,'filename');
            $model->user_id = Yii::app()->user->id;
            if(!empty($uploadedFile)) {
                $rnd = rand(0,9999);
                $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                $model->filename = $fileName;
            }
            else{
                $fileName = '';
                $model->filename = $oldimages;
            }
            $model->updated = date('Y-m-d H:i:s');
            $model->created =  date('Y-m-d H:i:s');
            if($model->save()){
                if(!empty($uploadedFile)) {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/photos/'.$fileName);
                }
                $this->redirect('/myphoto');
            }
        }
        $this->render('update_photo',compact('model'));

    }

    public function actionDeletePhoto(){
        $id = $_GET['id'];
        $this->loadModel($id)->delete();
    }

    public function actionPhotoMale(){
        $criteria =  new CDbCriteria();
        $criteria->with = 'user';
        $criteria->condition=' is_private =0 AND user.gender = 1';
        $criteria->order = 'views DESC';
        $photos =  new CActiveDataProvider('UserPhotoGalleries',array(
            'criteria'=>$criteria,

        ));
        $this->render('photos_male',compact('photos'));
    }

    public function actionPhotoFeMale(){
        $criteria =  new CDbCriteria();
        $criteria->with = 'user';
        $criteria->condition=' is_private =0 AND user.gender = 0';
        $criteria->order = 'views DESC';
        $photos =  new CActiveDataProvider('UserPhotoGalleries',array(
            'criteria'=>$criteria,

        ));
        $this->render('photos_female',compact('photos'));
    }

    public function actionDetailPhoto(){
        $id = $_GET['id'];
        $model = UserPhotoGalleries::model()->findByPk($id);
        $comment = new PhotoComments();
        $criteria = new CDbCriteria();
        $criteria->condition = 'photo_id='.$id;
        $allComment =  new CActiveDataProvider('PhotoComments', array(
            'criteria'=>$criteria,
        ));
        if(isset($_POST['PhotoComments'])){
            $comment->content = $_POST['PhotoComments']['content'];
            $comment->photo_id = $id;
            $comment->user_id= Yii::app()->user->id;
            $comment->created =  date('Y-m-d H:i:s');
            $comment->save();
        }

        $this->render('detail_photos',compact('model','comment','allComment'));
    }
}
