<?php 
namespace App\View; 
use Saml; 
use Sami;
use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; 
use Sammy\Packs\CapsuleHelper; 
use Sammy\Packs\CapsuleHelper\ArrayHelper; 
use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body


if (!function_exists ('App\View\generateComponentSelectorRef')) {
function generateComponentSelectorRef ($componentName) {
	return join ('', [
		$componentName,
		rand (0, 99999),
		rand (111, 9999) * rand (222, 99999),
		(int)time () * rand (111, 99999),
		time (),
		'r'
	]);
}}

Capsule::Def ('FlatButton', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "primary" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FlatButton');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FlatButton', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{background-color:#00bfff;color:#ffffff;border-style:solid;border-width:1px;padding:8px 12px;box-sizing:border-box;border-radius:6px;cursor:pointer;font-weight:bold;}div.'.$scope->componentSelectorReference.' span{font-size:15px;}div.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'hover{background-color:#1eaddd').';}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('FlatButton');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}