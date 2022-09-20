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

Capsule::Def ('Button', function ($args, CapsuleScopeContext $scope) {
	$scope->color = !(isset ($args ['color'])) ? "deepskyblue" : $args ['color'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Button');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Button', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'button.'.$scope->componentSelectorReference.'{background-color:'.(!is_null ($scope->color) ? $scope->color : 'inherit').';color:whitesmoke;padding:8px 15px;border:1px solid #1a7c9d;border-radius:6px;cursor:pointer;box-shadow:'.call_user_func(function($str){return $str;},'2px 2px 5px rgb(0 0 0 / 25%)').';}button.'.$scope->componentSelectorReference.' i{display:inline-block;}button.'.$scope->componentSelectorReference.' span{color:#ffffff;font-weight:bolder;}button.'.$scope->componentSelectorReference.' span i{display:inline-block;width:20px;height:20px;background-color:violet;float:left;}button.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'hover{background-color:orange').';}button.'.$scope->componentSelectorReference.':hover span{color:black;}button.'.$scope->componentSelectorReference.':hover span i{background-color:teal;}';})), Capsule::CreateElement ('button', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('Button');

Capsule::Def ('Container', function ($args, CapsuleScopeContext $scope) {
	$scope->backgroundColor = 'pink';
	$scope->borderColor = '#dda540';
	$scope->maxWidth = '1100px';
	$scope->textAlign = 'center';
	$scope->blue = '#8360c3';
	$scope->indigo = '#3f51b5';
	$scope->purple = '#673ab7';
	$scope->pink = '#e91e63';
	$scope->red = '#f44336';
	$scope->orange = '#ff7043';
	$scope->yellow = '#ff9800';
	$scope->green = '#4caf50';
	$scope->teal = '#009688';
	$scope->cyan = '#00bcd4';
	$scope->white = '#fff';
	$scope->gray = '#999';
	$scope->grayDark = '#555';
	$scope->primary = '#8360c3';
	$scope->secondary = '#777';
	$scope->success = '#4caf50';
	$scope->info = '#00bcd4';
	$scope->warning = '#ff7043';
	$scope->danger = '#f44336';
	$scope->light = '#fafafa';
	$scope->dark = '#293a50';
	$scope->breakpointXs = '0';
	$scope->breakpointSm = '576px';
	$scope->breakpointMd = '768px';
	$scope->breakpointLg = '992px';
	$scope->breakpointXl = '1200px';
	$scope->fontFamilyMonospace = 'SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace';

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Container');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Container', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{display:flex;flex:1;position:relative;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto").',-apple-system,BlinkMacSystemFont,'.call_user_func(function($str){return "'$str'";},"Segoe UI").',Roboto,'.call_user_func(function($str){return "'$str'";},"Helvetica Neue").',Arial,sans-serif,'.call_user_func(function($str){return "'$str'";},"Apple Color Emoji").','.call_user_func(function($str){return "'$str'";},"Segoe UI Emoji").','.call_user_func(function($str){return "'$str'";},"Segoe UI Symbol").','.call_user_func(function($str){return "'$str'";},"Noto Color Emoji").'').';background-color:'.(!is_null ($scope->backgroundColor) ? $scope->backgroundColor : 'inherit').';border:'.call_user_func(function($str){return $str;},'5px solid '.(!is_null ($scope->borderColor) ? $scope->borderColor : 'inherit').'').';box-sizing:border-box;padding:50px;max-width:'.(!is_null ($scope->maxWidth) ? $scope->maxWidth : 'inherit').';margin:200px auto;height:800px;justify-content:'.(!is_null ($scope->textAlign) ? $scope->textAlign : 'inherit').';align-items:'.(!is_null ($scope->textAlign) ? $scope->textAlign : 'inherit').';}div.'.$scope->componentSelectorReference.' span{font-size:40px;color:#333333;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('Container');

Capsule::Def ('SomeComponent', function ($args, CapsuleScopeContext $scope) {
	$scope->backgroundColor = 'pink';
	$scope->borderColor = '#dda540';
	$scope->maxWidth = '1100px';
	$scope->textAlign = 'center';
	$scope->blue = '#8360c3';
	$scope->indigo = '#3f51b5';
	$scope->purple = '#673ab7';
	$scope->pink = '#e91e63';
	$scope->red = '#f44336';
	$scope->orange = '#ff7043';
	$scope->yellow = '#ff9800';
	$scope->green = '#4caf50';
	$scope->teal = '#009688';
	$scope->cyan = '#00bcd4';
	$scope->white = '#fff';
	$scope->gray = '#999';
	$scope->grayDark = '#555';
	$scope->primary = '#8360c3';
	$scope->secondary = '#777';
	$scope->success = '#4caf50';
	$scope->info = '#00bcd4';
	$scope->warning = '#ff7043';
	$scope->danger = '#f44336';
	$scope->light = '#fafafa';
	$scope->dark = '#293a50';
	$scope->breakpointXs = '0';
	$scope->breakpointSm = '576px';
	$scope->breakpointMd = '768px';
	$scope->breakpointLg = '992px';
	$scope->breakpointXl = '1200px';
	$scope->fontFamilyMonospace = 'SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace';

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'SomeComponent');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'SomeComponent', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{display:flex;flex:1;position:relative;font-family:'.call_user_func(function($str){return $str;},''.call_user_func(function($str){return "'$str'";},"Roboto").',-apple-system,BlinkMacSystemFont,'.call_user_func(function($str){return "'$str'";},"Segoe UI").',Roboto,'.call_user_func(function($str){return "'$str'";},"Helvetica Neue").',Arial,sans-serif,'.call_user_func(function($str){return "'$str'";},"Apple Color Emoji").','.call_user_func(function($str){return "'$str'";},"Segoe UI Emoji").','.call_user_func(function($str){return "'$str'";},"Segoe UI Symbol").','.call_user_func(function($str){return "'$str'";},"Noto Color Emoji").'').';background-color:'.(!is_null ($scope->backgroundColor) ? $scope->backgroundColor : 'inherit').';border:'.call_user_func(function($str){return $str;},'5px solid '.(!is_null ($scope->borderColor) ? $scope->borderColor : 'inherit').'').';box-sizing:border-box;padding:50px;max-width:'.(!is_null ($scope->maxWidth) ? $scope->maxWidth : 'inherit').';margin:200px auto;height:800px;justify-content:'.(!is_null ($scope->textAlign) ? $scope->textAlign : 'inherit').';align-items:'.(!is_null ($scope->textAlign) ? $scope->textAlign : 'inherit').';color:'.(!is_null ($scope->success) ? $scope->success : 'inherit').';}div.'.$scope->componentSelectorReference.' span{font-size:40px;color:#333333;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('SomeComponent');

Capsule::Def ('MyFlatButton', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "primary" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'MyFlatButton');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'MyFlatButton', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'button.'.$scope->componentSelectorReference.'{background-color:#00bfff;color:#ffffff;border-style:solid;border-width:1px;padding:8px 12px;box-sizing:border-box;border-radius:6px;cursor:pointer;font-weight:bold;border-color:#379ec1;}button.'.$scope->componentSelectorReference.' span{font-size:15px;}button.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'hover{background-color:#1eaddd').';}';})), Capsule::CreateElement ('button', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('MyFlatButton');

Capsule::Def ('Icon', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "man4" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'Icon');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'Icon', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{display:inline-block;width:12px;height:13px;pointer-events:none;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('Icon');

Capsule::Def ('List', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'List');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'List', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{list-style:none;}div.'.$scope->componentSelectorReference.' li{list-style-type:none;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('List');

Capsule::Def ('FlexElement', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FlexElement');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FlexElement', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{display:block;box-sizing:border-box;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('FlexElement');

Capsule::Def ('StarIcon', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "man4" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'StarIcon');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'StarIcon', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'i.'.$scope->componentSelectorReference.'{display:inline-block;width:12px;height:13px;pointer-events:none;background-image:'.call_user_func(function($str){return $str;},'url(//cdn.site.com/i/star.png)').';}';})), Capsule::CreateElement ('i', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('StarIcon');

Capsule::Def ('FavoriteIcon', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "man4" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FavoriteIcon');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FavoriteIcon', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'i.'.$scope->componentSelectorReference.'{display:inline-block;width:12px;height:13px;pointer-events:none;background-image:'.call_user_func(function($str){return $str;},'url(//cdn.site.com/i/favorite.png)').';}';})), Capsule::CreateElement ('i', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('FavoriteIcon');

Capsule::Def ('CommentIcon', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "man4" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'CommentIcon');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'CommentIcon', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'i.'.$scope->componentSelectorReference.'{display:inline-block;width:12px;height:13px;pointer-events:none;background-image:'.call_user_func(function($str){return $str;},'url(//cdn.site.com/i/comment.png)').';}';})), Capsule::CreateElement ('i', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('CommentIcon');

Capsule::Def ('UserList', function ($args, CapsuleScopeContext $scope) {
	$scope->fontSize = !(isset ($args ['fontSize'])) ? '14' : $args ['fontSize'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'UserList');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'UserList', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'ul#'.$scope->componentSelectorReference.'{list-style:none;display:block;box-sizing:border-box;background-color:gray;padding:20px;}ul#'.$scope->componentSelectorReference.' li{list-style-type:none;}ul#'.$scope->componentSelectorReference.' i{color:red;font-style:normal;text-decoration:underline;display:inline-block;background-color:white;padding:4px;border-radius:4pc;}ul#'.$scope->componentSelectorReference.' li{background-color:'.call_user_func(function($str){return $str;},'rgba(0,0,0,0)').';margin-bottom:4px;font-size:'.call_user_func(function($str){return $str;},''.(!is_null($scope->fontSize)? $scope->fontSize:'inherit').'px').';border-bottom:1px solid #ccc;position:relative;}ul#'.$scope->componentSelectorReference.' li:'.call_user_func(function($str){return $str;},'hover{background-color:yellow').';color:blue;}ul#'.$scope->componentSelectorReference.' li:'.call_user_func(function($str){return $str;},'before{content:'.call_user_func(function($str){return "'$str'";},"").'').';display:inline-block;position:absolute;width:9px;height:9px;background-color:green;top:5px;left:-12px;border-radius:'.call_user_func(function($str){return $str;},'50%').';}';})), Capsule::CreateElement ('ul', ['id' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('UserList');

Capsule::Def ('UserListItem', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'UserListItem');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'UserListItem', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'li.'.$scope->componentSelectorReference.'{cursor:pointer;padding-left:4px;box-sizing:border-box;}';})), Capsule::CreateElement ('li', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('UserListItem');

Capsule::Def ('FlatButton', function ($args, CapsuleScopeContext $scope) {
	$scope->type = !(isset ($args ['type'])) ? "primary" : $args ['type'];

	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'FlatButton');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'FlatButton', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{background-color:#00bfff;color:#ffffff;border-style:solid;border-width:1px;padding:8px 12px;box-sizing:border-box;border-radius:6px;cursor:pointer;font-weight:bold;}div.'.$scope->componentSelectorReference.' span{font-size:15px;}div.'.$scope->componentSelectorReference.':'.call_user_func(function($str){return $str;},'hover{background-color:#1eaddd').';}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('FlatButton');

Capsule::Def ('RedElement', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'RedElement');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'RedElement', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{background-color:red;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('RedElement');

Capsule::Def ('BlueElement', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'BlueElement');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'BlueElement', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{background-color:blue;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('BlueElement');

Capsule::Def ('ListElement', function ($args, CapsuleScopeContext $scope) {


	$scope->componentSelectorReference = call_user_func ('App\View\generateComponentSelectorRef', 'ListElement');
	return Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('head', [], Capsule::CreateElement ('style', ['data-styled-component' => 'ListElement', 'data-styled-component-id' => $scope->componentSelectorReference, 'type' => 'text/css'], function ($args, CapsuleScopeContext $scope) {return 'div.'.$scope->componentSelectorReference.'{cursor:pointer;padding-left:4px;}';})), Capsule::CreateElement ('div', ['class' => $scope->componentSelectorReference], Capsule::Yield (null, [])));
});

Capsule::Export ('ListElement');



if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) {
	$module->exports = Capsule::Create (function () {
		return Capsule::PartialRender ('Fragment', []);
	});
}