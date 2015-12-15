<?php
use yii\helpers\Url;

use cmsgears\files\widgets\AvatarUploader;
?>

<?= AvatarUploader::widget([
		'options' => [ 'id' => 'avatar-user', 'class' => 'file-uploader' ], 
		'model' => $user->avatar,
		'postAction' => true
]);?>