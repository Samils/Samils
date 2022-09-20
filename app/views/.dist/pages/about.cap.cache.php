<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('About', function ($args, CapsuleScopeContext $scope) {
$scope->userList = !isset ($args['userList']) ? null : $args [ 'userList' ];
?>
<?php  Capsule::PartialRender ('div', ['style' => ['backgroundColor' =>'red','width' => 300,'borderRaius' => 3,'border' => '2px solid #cccddd'
      ]], Capsule::CreateElement ('h1', ['style' => [:color =>'white']], 'About Us'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('main', [], Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->userList) ? $scope->userList : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->userList[ $i ]);

          

 Capsule::PartialRender ('li', ['key' => $scope->user->key], $scope->user->key);

} }), Capsule::CreateElement ('p', [], 'Hello, we are here to aid you.'))); ?>
<?php }); ?>
<?php Capsule::Export ('About'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>