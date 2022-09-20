<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php Capsule::Def ('Myapi', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Myapi'), function ($args, CapsuleScopeContext $scope) {$arr8187182044ay = range(1, 100); for ( $i8187182044terator = 0; $i8187182044terator < count (is_array ($arr8187182044ay) ? $arr8187182044ay : []); $i8187182044terator++ ) {
	$scope->num = \Saml::Array2Object ($arr8187182044ay[ $i8187182044terator ]);

      
Capsule::PartialRender ('Image', ['src' => "/foto/index.jpg"]);

}}); ?>
<?php }); ?>
<?php Capsule::Export ('Myapi'); ?>

<?php $module->exports = Capsule::Element ('Myapi'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>