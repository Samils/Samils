<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
@import { Fragment } from 'capsule'

<?php Capsule::Def ('Pain', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php Capsule::PartialRender ('Fragment', []); ?>
<?php }); ?>
<?php Capsule::Export ('Pain'); ?>

<?php Capsule::Export ('<?php Capsule::Export ('@'); ?>'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>