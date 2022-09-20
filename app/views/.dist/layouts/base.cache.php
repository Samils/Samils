<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Application', Capsule::RelativePathDecode (path ('./application')));

?>

<?php Capsule::Def ('BaseLayout', function ($args, CapsuleScopeContext $scope) {
$scope->data = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php  Capsule::PartialRender ('Application', [], Capsule::Yield (null, ['data' => $scope->data, 'title' => "Hello, One 2..!"])); ?>
<?php }); ?>
<?php Capsule::Export ('BaseLayout'); ?>

<?php $module->exports = Capsule::Element ('BaseLayout'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>