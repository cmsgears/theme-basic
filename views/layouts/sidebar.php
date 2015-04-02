<?php
use cmsgears\files\widgets\AvatarUploader;
?>

<?= AvatarUploader::widget( [ 'listenerId' => 'btn-avatar-box', 'avatarId' => 'avatar', 'includeScripts' => true ] ); ?>