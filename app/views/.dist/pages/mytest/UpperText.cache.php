<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('UpperText', function ($args, CapsuleScopeContext $scope) {
$scope->text = !isset ($args['text']) ? null : $args [ 'text' ];
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Mun'), Capsule::CreateElement ('div', [], Capsule::CreateElement ('div', [], Capsule::CreateElement ('table', [], Capsule::CreateElement ('thead', [], Capsule::CreateElement ('tr', [], Capsule::CreateElement ('th', [], 'Nome'))), Capsule::CreateElement ('tbody', [], Capsule::CreateElement ('tr', [], Capsule::CreateElement ('td', [], 'Agostinho Lopes')), Capsule::CreateElement ('tr', [], Capsule::CreateElement ('td', [], 'Samuel Lopes')), Capsule::CreateElement ('tr', [], Capsule::CreateElement ('td', [], 'António Fernando')), Capsule::CreateElement ('tr', [], Capsule::CreateElement ('td', [], 'Plamedi Ngoma')))), Capsule::CreateElement ('Fragment', [], Capsule::CreateElement ('div', [], function ($args, CapsuleScopeContext $scope) {if ( true && 1 !== 5 ) {
              

 Capsule::PartialRender ('head', [], Capsule::CreateElement ('title', [], 'Upper Text'));

}})))), function($args, CapsuleScopeContext $scope){return strtoupper ($scope->text);}); ?>
<?php }); ?>
<?php Capsule::Export ('UpperText'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>