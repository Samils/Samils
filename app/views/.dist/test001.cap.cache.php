<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('User', function ($args, CapsuleScopeContext $scope) {
$scope->name = !(isset ($args ['name'])) ? null : $args ['name'];
$scope->email = !(isset ($args ['email'])) ? null : $args ['email'];
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('strong', [], 'Nome: ', $scope->name), Capsule::CreateElement ('br', []), Capsule::CreateElement ('span', [], 'Email: ', $scope->email)); ?>
<?php }); ?>
<?php Capsule::Export ('User'); ?>

<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'Hello, World :)'), function ($args, CapsuleScopeContext $scope) {$arr190010141ay = $scope->users; for ( $i = 0; $i < count (is_array ($arr190010141ay) ? $arr190010141ay : []); $i++ ) {
	$scope->user = \Saml::Object2Array ($arr190010141ay[ $i ]);

      
Capsule::PartialRender ('User', ['name' => $scope->user[:name], 'email' => $scope->user[:email]]);

}}); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>