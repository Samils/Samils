<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('User', function ($args, CapsuleScopeContext $scope) {
$scope->user = !(isset ($args ['datas'])) ? null : $args ['datas'];
?>
<?php  Capsule::PartialRender ('div', ['class' => "user"], Capsule::CreateElement ('a', ['href' => '/users/' . $scope->user->id], Capsule::CreateElement ('h1', [], $scope->user->name)), Capsule::CreateElement ('span', [], $scope->user->email)); ?>
<?php }); ?>
<?php Capsule::Export ('User'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>