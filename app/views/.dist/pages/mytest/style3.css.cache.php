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

Capsule::Def ('Card', function ($args, CapsuleScopeContext $scope) {
	$scope->bgColor = !(isset ($args ['bgColor'])) ? null : $args ['bgColor'];
	$scope->_hover = !(isset ($args ['_hover'])) ? null : $args ['_hover'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Card');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Card', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{width:400px;height:400px;border:1px solid #cdcdcd;box-shadow:'.call_user_func(function($str){return $str;},'4px 6px 20px rgba(0,0,0,.4)').';background-color:'.(!is_null ($scope->theme) ? ObjectHelper::ReadProperty ($scope->theme, 'colors.'.($scope->bgColor).'') : 'inherit').';display:flex;justify-content:center;align-items:center;cursor:grab;}div.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'hover{background-color:'.(!is_null($scope->theme)? ObjectHelper::ReadProperty($scope->theme,'colors.'.($scope->_hover['bgColor']).''):'inherit').'').';}div.'.$scope->componentSelectorReference.' span{color:white;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('Card');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}