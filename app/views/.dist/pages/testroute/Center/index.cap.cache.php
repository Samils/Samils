<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('$styles', Capsule::RelativePathDecode (path ('./styles')));

?>

<?php Capsule::Def ('Center', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('span', ['style' => $scope->styles['text']], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Center'); ?>

<?php Capsule::Export ('Center'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>