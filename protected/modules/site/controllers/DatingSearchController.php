<?php
/**
 * DatingSearch controller Home page
 */
class DatingSearchController extends SiteBaseController {
	
	const PAGE_SIZE = 20;
	
	/**
	 * Controller constructor
	 */
    public function init()
    {
        parent::init();

		// Add page breadcrumb and title
		$this->pageTitle[] = Yii::t('blog', 'Search');
		$this->breadcrumbs[ Yii::t('blog', 'Blog') ] = array('search/index');
    }

	/**
	 * Index action
	 */
    public function actionIndex() {
        $this->render('index');
    }


}