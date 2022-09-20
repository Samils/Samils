<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('</components')));

?>


<?php Capsule::Def ('Post', function ($args, CapsuleScopeContext $scope) {
$scope->id = !isset ($args['id']) ? 1 : $args [ 'id' ];
?>
<?php  Capsule::PartialRender ('div', ['class' => "post"], Capsule::CreateElement ('h1', [], 'Hello, Many Good Bies ', function($args, CapsuleScopeContext $scope){return $scope->id;}, ' ..!')); ?>
<?php }); ?>
<?php Capsule::Export ('Post'); ?>

<?php $module->exports = Capsule::Element ('do'); ?>

   

<?php  Capsule::PartialRender ('Container', [], function ($args, CapsuleScopeContext $scope) {$arr8962182044ay = range (1, 1000); for ( $i8962182044terator = 0; $i8962182044terator < count (is_array ($arr8962182044ay) ? $arr8962182044ay : []); $i8962182044terator++ ) {
	$scope->i = \Saml::Array2Object ($arr8962182044ay[ $i8962182044terator ]);

         
Capsule::PartialRender ('Post', ['id' => $scope->i]);

}}); ?>


@end<?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>