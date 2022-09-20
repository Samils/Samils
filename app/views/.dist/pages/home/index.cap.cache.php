<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Text', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('span', [], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Text'); ?>

<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('h1', [], 'Home'); ?>


  
<?php Capsule::PartialRender ('br', []); ?>


  

<?php  Capsule::PartialRender ('Text', [], 'Hello, you are in home page..!'); ?>



  
<?php Capsule::PartialRender ('br', []); ?>


  

<?php  Capsule::PartialRender ('Text', [], 'Hello, World..!'); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?>

<?php $module->exports = Capsule::Element ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>