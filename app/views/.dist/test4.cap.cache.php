<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
$scope->props = !isset ($args['props']) ? null : $args [ 'props' ];
?>
<?php  Capsule::PartialRender ('h1', array_merge ((is_array ($ref01014225084999e = $scope->props) ? $ref01014225084999e : []), (is_array ($ref0101422508693e = $this->scopeDefaultDatas) ? $ref0101422508693e : []), (is_array ($ref01014225085405e = $this->manans) ? $ref01014225085405e : []), ['key' => $scope->props->user->id, 'name' => "Sam"]), 'Hello, World..!'); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>