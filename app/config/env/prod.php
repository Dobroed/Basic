<?php
/**
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'components' => array(
	'db' => array(
			'connectionString' => 'mysql:host=basic;dbname=yii_basic',
			'username' => 'mysql',
			'password' => 'mysql',
			'enableProfiling' => true,
			'enableParamLogging' => true,
			'charset' => 'utf8',
	),
	),
	'params' => array(
		'yii.debug' => false,
		'yii.traceLevel' => 0,
		'yii.handleErrors'   => APP_CONFIG_NAME !== 'test',
	)
);