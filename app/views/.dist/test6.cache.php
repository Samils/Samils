<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php

Capsule::Def ('TextBox', new \Capsule\TextBox);

Capsule::Def ('EmailIcon', new \Capsule\Icons\EmailIcon);

Capsule::Def ('UserIcon', new \Capsule\Icons\UserIcon);

Capsule::Def ('CapsuleEmail', new \Capsule\Email);

Capsule::Def ('ImageList', new \Capsule\Sia\ImageList);

Capsule::Def ('Image', new \Capsule\Sia\Image);

Capsule::Def ('Filters', new \Capsule\Sia\Face\Filters);

?>



<?php

Capsule::Def ('CapsuleText', new \Capsule\Text);

Capsule::Def ('FragmentTextContainer', new \Capsule\FragmentTextContainer);

Capsule::Def ('FragmentTextLayer', new \Capsule\FragmentTextLayer);

Capsule::Def ('TranslateConsumer', new \Google\TranslateConsumer);

Capsule::Def ('TranslateText', new \Google\TranslateText);

Capsule::Def ('Text', new \Google\Text);

Capsule::Def ('TextFragment', new \Samils\TextFragment);

Capsule::Def ('Text', new \Samils\Text);

Capsule::Def ('Txt', new \Txt);

Capsule::Def ('EmailText', new \EmailText);

Capsule::Def ('HTMLText', new \HTMLText);

Capsule::Def ('Mundio', new \Mundio);

Capsule::Def ('Raio', new \Raio);

Capsule::Def ('Verde', new \Verde);

Capsule::Def ('MotionDiv', new \Motion\Div);

Capsule::Def ('Sasuke', new \Sasuke);

?>


<?php

Capsule::Def ('FramerMotionText', new \FramerMotion\Text);

?>


<?php

Capsule::Def ('CapsuleThemeProvider', new \Capsule\CapsuleThemeProvider);

?>


<?php
	Capsule::Import ('$theme', Capsule::RelativePathDecode (path ('./theme')));

?>


<?php
	Capsule::Import ('$styles', Capsule::RelativePathDecode (path ('./styles')));

?>


<?php
	Capsule::Import (['$users' => '$userList'], Capsule::RelativePathDecode (path ('@repo/users')));

?>


<?php
	Capsule::Import (['$aComponent' => 'AComponent'], Capsule::RelativePathDecode (path ('./some-file-name')));

?>

<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('CapsuleThemeProvider', ['theme' => $scope->theme], Capsule::CreateElement ('h1', ['style' => $scope->styles->text], 'Hello, World..!'), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->userList) ? $scope->userList : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->userList[ $i ]);

        

 Capsule::PartialRender ('li', [], function($args, CapsuleScopeContext $scope){return $scope->user->name;});

} })); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>