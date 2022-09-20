<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
$scope->props = !isset ($args['props']) ? null : $args [ 'props' ];
?>
<?php  Capsule::PartialRender ('CapsuleContext', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (range (1, 100)) ? range (1, 100) : []); $i++ ) {
	$scope->n = \Saml::Array2Object (range (1, 100)[ $i ]);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->n < 5 ) {
        

 Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('i', ['icon' => "", 'class' => "fa fa-flag"], '&nbsp;'));

}});
      

 Capsule::PartialRender ('TabListItem', [], 'Num => ', function($args, CapsuleScopeContext $scope){return $scope->n;}, '.');

} }, Capsule::CreateElement ('h1', [], 'The one is a monster')); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>