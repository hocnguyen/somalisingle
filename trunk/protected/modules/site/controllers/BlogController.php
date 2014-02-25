<?php
/**
 * Blog controller Home page
 */
class BlogController extends SiteBaseController {
	
	const PAGE_SIZE = 20;
	
	/**
	 * Controller constructor
	 */
    public function init()
    {
        parent::init();

		// Add page breadcrumb and title
		$this->pageTitle[] = Yii::t('blog', 'Blog');
		$this->breadcrumbs[ Yii::t('blog', 'Blog') ] = array('blog/index');
    }

	/**
	 * Index action
	 */
    public function actionIndex() {
		
		//$posts = Blogposts::model()->grabPostsByCats( array_keys(BlogCats::model()->getCatsForMember()), self::PAGE_SIZE);
	
        $this->render('index');
    }


}