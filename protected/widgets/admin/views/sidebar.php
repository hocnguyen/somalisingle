<?php
// Side bar menu
$this->widget('widgets.NBADMenu', array(
	'activateParents' => true,
	'htmlOptions' => array( 'class' => 'navigation' ) ,
    'items' => array(
					// dashboard
        			 array( 
							'label' => Yii::t('global', 'Dashboard'), 
							'url' => array('index/index'),
							'icon' => 'isw-grid'
						  ),
					 // System
					 array( 
							'label' => Yii::t('global', 'System'), 
							'url' => array('settings/index'),
							'icon' => 'isw-settings',
							'itemOptions' => array( 'class' => 'openable' ),
							'items' => array(
									array(
											'label' => Yii::t('global', 'Manage Settings'),
											'url' => array('settings/index'),
											'icon' => 'icon-wrench'
                                    ),
                                    array(
                                        'label' => Yii::t('global', 'Manage Setting Languages'),
                                        'url' => array('languages/setting'),
                                        'icon' => 'icon-wrench'
                                    ),

                            ),
                                    	
                                    
                     ),
                      // Members
					 array( 
							'label' => Yii::t('global', 'Members'), 
							'url' => array('members'),
							'icon' => 'isw-users',
							'itemOptions' => array( 'class' => 'openable' ),
							'items' => array(
								array( 
										'label' => Yii::t('global', 'Manage Members'), 
										'url' => array('users/index'),
                                        'icon' => 'icon-user'
								 ),
                                 array( 
										'label' => Yii::t('global', 'Admin Accounts'), 
										'url' => array('users/admins'),
                                        'icon' => 'icon-user'
								 ),
                                 array( 
										'label' => Yii::t('global', 'Who\'s Online'), 
										'url' => array('users/admins'),
                                        'icon' => 'icon-star-empty'
								 ),
							),
						  ),

    				 // Members
					 array( 
							'label' => Yii::t('global', 'CMS'),
							'url' => array('cms'),
							'icon' => 'isw-list',
							'itemOptions' => array( 'class' => 'openable' ),
							'items' => array(
								array( 
										'label' => Yii::t('global', 'Blogs'),
										'url' => array('blogpost/index'),
                                        'icon' => 'icon-book'
								 ),
                                array(
                                    'label' => Yii::t('global', 'Custom Page'),
                                    'url' => array('custompages/index'),
                                    'icon' => 'icon-list-alt'
                                ),
                               // array(
//                                    'label' => Yii::t('global', 'Manage Definitions'),
//                                    'url' => array('definition/index'),
//                                    'icon' => ' icon-star-empty'
//                                ),
//                                array(
//                                    'label' => Yii::t('global', 'Manage Languages'),
//                                    'url' => array('languages/index'),
//                                    'icon' => 'icon-globe'
//                                ),
						  ),
                     ),
                   	 // Advertise
					 array( 
							'label' => Yii::t('global', 'Datings'),
							'url' => array('datings'),
							'icon' => 'isw-ok',
							'itemOptions' => array( 'class' => 'openable' ),
							'items' => array(
								array( 
										'label' => Yii::t('global', 'Manage Save Search'),
										'url' => array('banners/index'),
                                        'icon' => 'icon-file'
								 ),
                                 array( 
										'label' => Yii::t('global', 'Manage Message'),
										'url' => array('message/index'),
                                        'icon' => 'icon-leaf'
								 ),
                                 array( 
										'label' => Yii::t('global', 'Manage Photo'),
										'url' => array('message/index'),
                                        'icon' => 'icon-barcode'
								 ),
                                 array( 
										'label' => Yii::t('global', 'Manage Rating'),
										'url' => array('message/index'),
                                        'icon' => 'icon-cog'
								 ),
                                  array( 
										'label' => Yii::t('global', 'Manage Comment'),
										'url' => array('message/index'),
                                        'icon' => ' icon-tasks'
								 ),
						  ),
                     ),
                    
                     
    )
));
?>