<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
$scope->props = !isset ($args['props']) ? null : $args [ 'props' ];
?>
<?php  Capsule::PartialRender ('h1', array_merge ((is_array ($ref06204620097140e = $scope->props) ? $ref06204620097140e : []), (is_array ($ref06204620095717e = $this->scopeDefaultDatas) ? $ref06204620095717e : []), (is_array ($ref06204620092347e = $this->manans) ? $ref06204620092347e : []), ['key' => $scope->props->user->id, 'name' => "Sam"]), 'Hello, World..!'); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>