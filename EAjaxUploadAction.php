<?php
/**
 * Sample fine uploader controller action.
 *
 * Handles the server-side functionality of fine uploader.
 *
 * @author Filios Konstantinos <konfilios@gmail.com>
 * @author Vladimir Papaev <kosenka@gmail.com>
 * @version 0.1
 * @license http://www.opensource.org/licenses/bsd-license.php
 */
class EAjaxUploadAction extends CAction
{
	public function run()
	{
		Yii::import("ext.EAjaxUpload.qqFileUploader");

		// list of valid extensions, ex. array("jpeg", "xml", "bmp")
		$allowedExtensions = array("jpg");
		// max file size in bytes
		$sizeLimit = 1 * 1024 * 1024;

		$uploader = new qqFileUploader();

		$uploader->setAllowedExtensions($allowedExtensions);
		$uploader->setSizeLimit($sizeLimit);

		$result = $uploader->handleUpload('upload/');

		// to pass data through iframe you will need to encode all html tags
		echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
	}

}
