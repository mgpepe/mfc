<?php
App::uses('AppModel', 'Model');
/**
 * FoodImage Model
 *
 */
class FoodImage extends AppModel {



public $actsAs = array(
	'Uploader.Attachment' => array(
		// Do not copy all these settings, it's merely an example
		'filename' => array(
			'nameCallback' => 'formatName',//formatName'
			'append' => '',
			'prepend' => '',
			'tempDir' => '',
			'uploadDir' => 'img/foods/',
			'transportDir' => '',
			'finalPath' => '',
			'dbColumn' => '',
			'metaColumns' => array(),
			'defaultPath' => '',
			'overwrite' => false,
			'stopSave' => true,
			'allowEmpty' => true,
			'transforms' => array(),
			'transport' => array(),
			'curl' => array()
		)
	),
	'Uploader.FileValidation' => array(
		'filename' => array(
			'extension' => array('png', 'jpg', 'jpeg'),
			'filesize' => 5242880,
			'required' => array(
				'value' => true,
				'error' => 'File required'
			)
		)
	)
);


public function formatName($name, $file) {
	$seed = 'fg76jk'.date('Y-m-d H:i:s');
	$hash = sha1(uniqid($seed . mt_rand(), true));
	return $hash;
}


}
