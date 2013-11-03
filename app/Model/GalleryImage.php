<?php
App::uses('AppModel', 'Model');
/**
 * GalleryImage Model
 *
 */
class GalleryImage extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	// public $useTable = 'gallery_images';





public $actsAs = array(
	'Uploader.Attachment' => array(
		// Do not copy all these settings, it's merely an example
		'filename' => array(
			'nameCallback' => 'formatName',//formatName'
			'append' => '',
			'prepend' => '',
			'tempDir' => '',
			'uploadDir' => 'img/hearts/',
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
			'extension' => array('png'),
			'filesize' => 5242880,
			'required' => array(
				'value' => true,
				'error' => 'File required'
			)
		)
	)
);


public function formatName($name, $file) {
	$seed = 'JvKnsadfrQs'.date('Y-m-d H:i:s');
	$hash = sha1(uniqid($seed . mt_rand(), true));
	return $hash;
}


}
