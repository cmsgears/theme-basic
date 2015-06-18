<?php
use yii\helpers\Url;

// use cmsgears\files\widgets\AvatarUploader;
use cmsgears\files\widgets\FileUploader;
?>

<?php // AvatarUploader::widget( [ 'options' => [ 'id' => 'avatar-user' ] ] ); ?>

<?=FileUploader::widget([
	'options' => [ 'id' => 'avatar-user', 'class' => 'file-uploader' ], 
	'model' => $user->avatar, 
	'postaction' => true,
	'postactionurl' => Url::toRoute( [ 'apix/user/avatar'], true )
]);?>