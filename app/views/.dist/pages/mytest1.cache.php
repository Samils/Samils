<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('MyTest', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? [] : $args ['data'];
?>
<?php for ( $scope->i = 0; $scope->i < 100; $scope->i++ ) {  ?>
 
  <?php if ( $scope->i >= 1 ) { ?>

<?php Capsule::PartialRender ('div', []); ?>
<?php } ?>

  <?php if ( in_array ($scope->i, range (5, 15)) ) { ?>

    

<?php  Capsule::PartialRender ('form', ['method' => "post", 'action' => "/port"], Capsule::CreateElement ('input', [])); ?>
<?php } ?>

  

<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'Hell')); ?> 
<?php }  ?>
<?php }); ?>
<?php Capsule::Export ('MyTest'); ?>

<?php $module->exports = Capsule::Element ('MyTest'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>