<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('About', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('h1', [], 'About Component Works..!'); ?>
<?php }); ?>
<?php Capsule::Export ('About'); ?>

<?php $module->exports = Capsule::Element ('About'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>