<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('UserList', Capsule::RelativePathDecode (path ('./styles.css')));
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('./styles.css')));

?>


<?php
	Capsule::Import ('UpperText', Capsule::RelativePathDecode (path ('./UpperText')));

?>

<?php Capsule::Def ('MyTest', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? [] : $args ['data'];
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'My Test'), Capsule::CreateElement ('Container', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('UpperText', ['text' => $this->myUserName]))), Capsule::CreateElement ('Button', [], Capsule::CreateElement ('span', [], Capsule::CreateElement ('i', []), 'Click Me!!')), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Button', ['color' => "red"], Capsule::CreateElement ('span', [], 'Second Button')), Capsule::CreateElement ('UserList', ['fontSize' => 16], function ($args, CapsuleScopeContext $scope) {if ( true ) {
                                      
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr6197220333ay = $scope->users; for ( $i6197220333terator = 0; $i6197220333terator < count (is_array ($arr6197220333ay) ? $arr6197220333ay : []); $i6197220333terator++ ) {
	$scope->user = \Saml::Array2Object ($arr6197220333ay[ $i6197220333terator ]);
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( in_array ($scope->user->name, ['laborum qui', 'qui sunt']) ) {
            

 Capsule::PartialRender ('i', [], 'I am Me :)');

}});
          

 Capsule::PartialRender ('li', [], 'user Name => ', function($args, CapsuleScopeContext $scope){return $scope->user->name;});

}});
}})); ?>
<?php }); ?>
<?php Capsule::Export ('MyTest'); ?>

<?php $module->exports = Capsule::Element ('MyTest'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>