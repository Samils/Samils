<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('h1', [], 'home Component Works..!'); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?>

<?php $module->exports = Capsule::Element ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>