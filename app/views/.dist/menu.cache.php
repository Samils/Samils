<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('List', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('ul', [], Capsule::Yield (null, ['title' => "menu"])); ?>
<?php }); ?>
<?php Capsule::Export ('List'); ?>

<?php Capsule::Def ('UserList', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::PartialRender ('List', ['datas' => 54]); ?>
<?php }); ?>
<?php Capsule::Export ('UserList'); ?>

<?php Capsule::Def ('ListItem', function ($args, CapsuleScopeContext $scope) {
$scope->to = !isset ($args['to']) ? null : $args [ 'to' ];
$scope->label = !isset ($args['label']) ? null : $args [ 'label' ];
?>
<?php  Capsule::PartialRender ('li', [], Capsule::CreateElement ('a', ['href' => $scope->to], function($args, CapsuleScopeContext $scope){return $scope->label;})); ?>
<?php }); ?>
<?php Capsule::Export ('ListItem'); ?>

<?php Capsule::Def ('Menu', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('List', [], Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"]), Capsule::CreateElement ('ListItem', ['to' => root_path, 'label' => "Home"])); ?>
<?php }); ?>
<?php Capsule::Export ('Menu'); ?>

<?php $module->exports = Capsule::Element ('Menu'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>