<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('AboutPageContainer', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Title', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('List', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('ListItem', Capsule::RelativePathDecode (path ('./styles.css')));

?>

<?php Capsule::Def ('About', function ($args, CapsuleScopeContext $scope) {
$scope->userList = !isset ($args['userList']) ? null : $args [ 'userList' ];
?>
<?php  Capsule::PartialRender ('AboutPageContainer', ['bgColor' => "deepskyblue"], Capsule::CreateElement ('Title', [], 'About Us'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('main', [], Capsule::CreateElement ('Fragment', [], Capsule::CreateElement ('p', [], 'Tema1 Color => ', function($args, CapsuleScopeContext $scope){return $scope->themePrimaryColor;})), Capsule::CreateElement ('List', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->userList) ? $scope->userList : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->userList[ $i ]);

          

 Capsule::PartialRender ('ListItem', ['key' => $scope->user->key], function($args, CapsuleScopeContext $scope){return $scope->user->key;});

} }), Capsule::CreateElement ('p', [], 'Hello, we are here to aid you.'))); ?>
<?php }); ?>
<?php Capsule::Export ('About'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>