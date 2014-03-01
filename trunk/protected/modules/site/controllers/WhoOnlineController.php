<?php
/**
 * WhoOnline controller Home page
 */
class WhoOnlineController extends SiteBaseController {
	
	const PAGE_SIZE = 20;
	
	/**
	 * Controller constructor
	 */
    public function init()
    {
        parent::init();

		// Add page breadcrumb and title
		$this->pageTitle[] = Yii::t('blog', 'Who\'s Online');
		$this->breadcrumbs[ Yii::t('blog', 'Blog') ] = array('whoOnline/index');
    }

	/**
	 * Index action
	 */
    public function actionIndex() {

        $criteria = new CDbCriteria();
        $criteria->condition = "status_online = 1";
        $userOnline = new CActiveDataProvider('Users',array(
           'criteria'=>$criteria
        ));
        $this->render('index',compact('userOnline'));
    }


}