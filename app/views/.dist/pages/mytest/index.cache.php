<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('UserList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('SomeComponent', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('MyFlatButton', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('UserListItem', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('Card', Capsule::RelativePathDecode (path ('./style3.css')));

?>


<?php
	Capsule::Import ('UpperText', Capsule::RelativePathDecode (path ('./UpperText')));

?>


<?php
	Capsule::Import ('$appLogo', Capsule::RelativePathDecode (path ('./app-logo-original.png')));

?>

<?php Capsule::Def ('MyTest', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? [] : $args ['data'];
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', ['src' => "man"], 'My Test'), Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'Mundo')), Capsule::CreateElement ('img', ['src' => $scope->appLogo]), Capsule::CreateElement ('Card', ['bgColor' => "red.600", '_hover' => ['bgColor' => 'red.800']], Capsule::CreateElement ('span', [], 'This is a card component!')), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Card', ['bgColor' => "teal.600", '_hover' => ['bgColor' => 'teal.800']], Capsule::CreateElement ('span', [], 'This is a card component!')), Capsule::CreateElement ('br', []), Capsule::CreateElement ('span', ['style' => ['color' => ObjectHelper::ReadProperty ($scope->theme, 'colors.teal.100')]], 'I am Kira'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('img', ['src' => $scope->appLogo, 'width' => 300]), Capsule::CreateElement ('MyFlatButton', [], Capsule::CreateElement ('span', [], 'Click On Me!!')), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Container', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('UpperText', ['text' => $this->myUserName])), Capsule::CreateElement ('br', []), Capsule::CreateElement ('SomeComponent', [], 'YAYA')), Capsule::CreateElement ('Button', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', []), 'Click Me!!')), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Button', ['color' => "red"], Capsule::CreateElement ('span', [], 'Second Button')), Capsule::CreateElement ('UserList', ['fontSize' => 16], function ($args, CapsuleScopeContext $scope) {if ( true ) {
                                      
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr3905182045ay = $scope->users; for ( $i3905182045terator = 0; $i3905182045terator < count (is_array ($arr3905182045ay) ? $arr3905182045ay : []); $i3905182045terator++ ) {
	$scope->user = \Saml::Array2Object ($arr3905182045ay[ $i3905182045terator ]);
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( in_array ($scope->user->name, ['laborum qui', 'qui sunt']) ) {
            

 Capsule::PartialRender ('i', [], 'I am Me :)');

}});
          

 Capsule::PartialRender ('UserListItem', [], 'user Name => ', function($args, CapsuleScopeContext $scope){return $scope->user->name;});

}});
}})); ?>
<?php }); ?>
<?php Capsule::Export ('MyTest'); ?>

<?php $module->exports = Capsule::Element ('MyTest'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>