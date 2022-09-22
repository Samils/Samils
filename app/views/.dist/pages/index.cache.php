<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('./Button')));

?>

<?php Capsule::Def ('Pages', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'Hello, World...!! :)'), Capsule::CreateElement ('Button', [], 'Click On ME!!')); ?>
<?php }); ?>
<?php Capsule::Export ('Pages'); ?>

<?php $module->exports = Capsule::Element ('Pages'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>