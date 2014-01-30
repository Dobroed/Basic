<?php
/**
 *
 * main.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'main');

use Yiinitializr\Helpers\ArrayX;

// web application configuration
return array(
	'name' => '{APPLICATION NAME}',

	// path aliases
	'aliases' => array(
		'bootstrap' => dirname(__FILE__) . '/../lib/vendor/2amigos/yiistrap',
		'yiiwheels' => dirname(__FILE__) . '/../lib/vendor/2amigos/yiiwheels',
	),

	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(),
     'import'=>array(
        'application.modules.user.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.models.*',
        'application.modules.rights.components.*',
   
),

	// application modules
	'modules' => array(
            'user' => array(
            // названия таблиц взяты по умолчанию, их можно изменить
                'tableUsers' => 'tbl_users',
                 'tableProfiles' => 'tbl_profiles',
                'tableProfileFields' => 'tbl_profiles_fields',
                 # encrypting method (php hash function)
           
             'hash' => 'md5',

            # send activation email
            'sendActivationMail' => false,

            # allow access for non-activated users
            'loginNotActiv' => false,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,

            # automatically login from registration
            'autoLogin' => true,

            # registration path
            'registrationUrl' => array('/user/registration'),

            # recovery password path
            'recoveryUrl' => array('/user/recovery'),

            # login form path
            'loginUrl' => array('/user/login'),

            # page after login
            'returnUrl' => array('/user/profile'),

            # page after logout
            'returnLogoutUrl' => array('/user/login'),
         ),
            'rights'=>array(
		
                ),
        ),

	// application components
	'components' => array(
			'db' => array(
			'connectionString' => 'mysql:host=basic;dbname=yii_basic',
			'username' => 'mysql',
			'password' => 'mysql',
			'enableProfiling' => true,
			'enableParamLogging' => true,
			'charset' => 'utf8',
                            'tablePrefix' => 'tbl_',
	),
            'log'=>array(
                
                ),
		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),

		'clientScript' => array(
			'scriptMap' => array(
				'bootstrap.min.css' => false,
				'bootstrap.min.js' => false,
				'bootstrap-yii.css' => false
			)
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,

			'rules' => array(
				// default rules
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			'class'=>'RWebUser',
                        'allowAutoLogin'=>true,
		),
            'authManager'=>array(
		'class'=>'RDbAuthManager',
		'defaultRoles' => array('Guest'),
                 'rightsTable' => 'tbl_rights',
                 'itemTable' => 'tbl_auth_item',
                 'itemChildTable' => 'tbl_auth_item_child',
                 'assignmentTable' => 'tbl_auth_assignment',
	),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		)
	),
	// application parameters
	'params' => array()
          
        
);
