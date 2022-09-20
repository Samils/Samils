<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import (['{ Form, Mundo as World, Muno }' => 'Form'], Capsule::RelativePathDecode (path ('<dcapsule>')));

?>


<?php
	Capsule::Import ('ApplicationMetaDatas', Capsule::RelativePathDecode (path ('dcapsule')));
	Capsule::Import ('Style', Capsule::RelativePathDecode (path ('dcapsule')));
	Capsule::Import ('Script', Capsule::RelativePathDecode (path ('dcapsule')));

?>

<?php
	Capsule::Import ('App', Capsule::RelativePathDecode (path ('./App')));

?>


<?php
	Capsule::Import ('Form', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Label', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('Text', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('TextInput', Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import ('EmailInput', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php Capsule::Def ('Home', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('h1', [], 'Hello, World..!'); ?>
<?php }); ?>
<?php Capsule::Export ('Home'); ?>


<?php Capsule::Def ('RegisterForm', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('Form', ['name' => 5], Capsule::CreateElement ('Mundo', [])), function ($args, CapsuleScopeContext $scope) {if ( $scope->name === 'Sam' ) {
      

 Capsule::PartialRender ('h1', [], 'Hello, Man');

}}, Capsule::CreateElement ('h1', [], 'Footer')); ?>
<?php }); ?>
<?php Capsule::Export ('RegisterForm'); ?>

                                                                 
         
                       

<?php Capsule::Def ('CreateUser', function ($args, CapsuleScopeContext $scope) {
$scope->user = !isset ($args['user']) ? null : $args [ 'user' ];
?>
<?php  Capsule::PartialRender ('Form', ['method' => "put", 'action' => update_user_path, 'for' => $scope->user], Capsule::CreateElement ('Label', ['for' => "name"], 'Nome'), Capsule::CreateElement ('TextInput', ['name' => "name"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Label', ['for' => "email"], 'Email'), Capsule::CreateElement ('EmailInput', ['placeholder' => "Digite seu email", 'name' => "email"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Submit', [])); ?>
<?php }); ?>
<?php Capsule::Export ('CreateUser'); ?>

<?php $module->exports = Capsule::Element ('do ($scope->props)'); ?>

  

<?php  Capsule::PartialRender ('MaterialApp', [], Capsule::CreateElement ('CreateUser', ['props' => $scope->props])); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>