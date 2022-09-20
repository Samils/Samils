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

Capsule::Def ('AboutPageContainer', function ($args, CapsuleScopeContext $scope) {
	$scope->bgColor = !(isset ($args ['bgColor'])) ? "green" : $args ['bgColor'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'AboutPageContainer');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'AboutPageContainer', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{background-color:'.(!is_null ($scope->bgColor) ? $scope->bgColor : 'inherit').';width:300px;border-radius:3px;border:2px solid #cccddd;padding:30px;text-align:center;}div.'.$scope->componentSelectorReference.' p{color:'.(!is_null($scope->themeRed500)? $scope->themeRed500:'inherit').';}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('AboutPageContainer');

Capsule::Def ('Title', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Title');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Title', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'h1.'.$scope->componentSelectorReference.'{color:white;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto Thin").'').';position:relative;text-transform:uppercase;background-color:'.(!is_null ($scope->themePrimaryBackgroundColor) ? $scope->themePrimaryBackgroundColor : 'inherit').';}h1.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'before{content:'.call_user_func(function($str){return "'$str'";},"a").'').';width:10px;height:10px;background-color:red;position:absolute;color:black;left:-30px;top:-30px;}';})), Capsule::CreateElement ('h1', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('Title');

Capsule::Def ('List', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'List');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'List', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'ul.'.$scope->componentSelectorReference.'{padding:0px;list-style:none;}';})), Capsule::CreateElement ('ul', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('List');

Capsule::Def ('ListItem', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ListItem');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ListItem', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'li.'.$scope->componentSelectorReference.'{list-style-type:none;padding:0px 0px 7px;color:'.(!is_null ($scope->themePrimaryColor) ? $scope->themePrimaryColor : 'inherit').';font-family:Roboto;}';})), Capsule::CreateElement ('li', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('ListItem');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}