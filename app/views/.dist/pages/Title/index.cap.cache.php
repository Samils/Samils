<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {
$scope->text = !isset ($args['text']) ? null : $args [ 'text' ];
?>
<?php  Capsule::PartialRender ('h1', ['class' => "title"], $scope->text); ?>
<?php }); ?>
<?php Capsule::Export ('Title'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>