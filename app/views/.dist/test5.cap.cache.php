<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->children = !isset ($args['children']) ? null : $args [ 'children' ];
$scope->props = ArrayHelper::PropsBeyond (['children', 'title', 'children'], $args);
$scope->mundo = !isset ($args['mundo']) ? null : $args [ 'mundo' ];
$scope->rest = ArrayHelper::PropsBeyond (['children', 'title', 'children', 'mundo'], $args);
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Hello, World..!')); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>