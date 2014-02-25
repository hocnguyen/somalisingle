<?php
/**
 * Index controller Home page
 */
class IndexController extends SiteBaseController {
	
	const PAGE_SIZE = 16;

	/**
	 * Controller constructor
	 */
    public function init()
    {
        parent::init();
    }
	
	/**
	 * List of available actions
	 */
	public function actions()
	{
	   return array(
	      'captcha' => array(
	         'class' => 'CCaptchaAction',
	         'backColor' => 0xFFFFFF,
		     'minLength' => 3,
		     'maxLength' => 7,
			 'testLimit' => 3,
			 'padding' => array_rand( range( 2, 10 ) ),
	      ),
	   );
	}
	
	/**
	 * Index action
	 */
    public function actionindex() {

		$this->pageTitle[] =  Yii::t('global','Somalisingle Home') ;
        $model= new Users();
        if(isset($_POST['Users']))
        {
            $model->attributes=$_POST['Users'];
            $_POST['Users']['bday'] = Users::model()->getFormatDate( $_POST['Users']['bday']);
            $_POST['Users']['bmonth'] = Users::model()->getFormatDate( $_POST['Users']['bmonth']);
            $tmp = array($_POST['Users']['bday'],$_POST['Users']['bmonth'],$_POST['Users']['byear']);
            $model->birthday = implode('.',$tmp);
            $model->password = Users::model()->hashPassword( $model->password, $model->email );
            $model->role = 'guest';
            if($model->save()){
                Yii::app()->session['regStep1'] = $model->id;
                $this->redirect(array('users/registration','id'=>$model->id));
            }

        }
        $this->render('index', compact('model'));
    }

}