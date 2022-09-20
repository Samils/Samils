<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php $module->exports = Capsule::Element ('do ({ data: $users })'); ?>

  

<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->users) ? $scope->users : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->users[ $i ]);

      

 Capsule::PartialRender ('li', [], function($args, CapsuleScopeContext $scope){return $scope->user->name;});

} }); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>