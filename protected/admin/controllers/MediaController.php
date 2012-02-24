<?php

class MediaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			
		);
	}

        public function actionList()
        {
                $dir = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/upload/download';
                $files = CFileHelper::findFiles($dir);
                $this->render('list',array(
			'files'=>$files,
		));
        }

        public function actionUpload()
        {
                Yii::import("ext.EAjaxUpload.qqFileUploader");

                $folder=$_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl.'/upload/download/';// folder for uploaded files
                $allowedExtensions = array("jpg");//array("jpg","jpeg","gif","exe","mov" and etc...
                $sizeLimit = 2 * 1024 * 1024;// maximum file size in bytes
                $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
                $result = $uploader->handleUpload($folder);
                $result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
        }
}
