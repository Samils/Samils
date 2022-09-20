<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Export ('Footer do ($siteName)'); ?>

   

<?php  Capsule::PartialRender ('footer', [], 'Footer Here ', $scope->siteName, Capsule::CreateElement ('div', [], Capsule::Yield (null, ['year' => "2020"], Capsule::CreateElement ('i', [], 'icon')))); ?>


@end<?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>