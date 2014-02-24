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
            if($model->save());
                $this->redirect(array('register','id'=>$model->id));
        }
        $this->render('index', compact('model'));
    }

}