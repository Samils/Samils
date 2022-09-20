<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('CapsuleThemeProvider', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', ['class' => "user"], Capsule::CreateElement ('div', [], Capsule::Yield (null, [])), Capsule::CreateElement ('div', [], Capsule::CreateElement ('h4', ['style' => "color: #444444; font-size: 36px; font-family: 'Trebuchet MS'; font-weight: 100; padding: 24px .0px 10px"], 'Name Here'))); ?>
<?php }); ?>
<?php Capsule::Export ('CapsuleThemeProvider'); ?>

<?php Capsule::Def ('CapsuleThemeContainer', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::RenderYieldContext (null, []); ?>
<?php }); ?>
<?php Capsule::Export ('CapsuleThemeContainer'); ?>

<?php Capsule::Def ('Theme', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', ['style' => "background: black"], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Theme'); ?>

<?php Capsule::Def ('Fragment', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::RenderYieldContext (null, []); ?>
<?php }); ?>
<?php Capsule::Export ('Fragment'); ?>

<?php Capsule::Def ('Button', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('button', [], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Button'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>