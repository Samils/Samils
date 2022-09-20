<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Footer', function ($args, CapsuleScopeContext $scope) {
$scope->siteName = !isset ($args['siteName']) ? null : $args [ 'siteName' ];
?>
<?php  Capsule::PartialRender ('footer', [], 'Footer Here ', function($args, CapsuleScopeContext $scope){return $scope->siteName;}, Capsule::CreateElement ('div', [], Capsule::Yield (null, ['year' => "2020"], Capsule::CreateElement ('i', [], 'icon')))); ?>
<?php }); ?>
<?php Capsule::Export ('Footer'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>