<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Export ('Header do ($scope->title)'); ?>

   

<?php  Capsule::PartialRender ('header', ['class' => "header header-container", 'id' => "header"], '<h3 class="i">', function($args, CapsuleScopeContext $scope){return $scope->title;}, '</h1>', Capsule::CreateElement ('p', [], 'I am Sam', Capsule::CreateElement ('span', [], 'Yayay'), Capsule::CreateElement ('i', ['class' => "fa fa-phone"])), Capsule::CreateElement ('button', [], Capsule::CreateElement ('Text', [], 'Click Me'))); ?>


@end<?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>