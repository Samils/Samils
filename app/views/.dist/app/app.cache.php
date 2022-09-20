<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php

Capsule::Def ('User', new \User);

Capsule::Def ('UserForm', new \UserForm);

?>


<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Mock', Capsule::RelativePathDecode (path ('./Test/Mock')));

?>


<?php
	Capsule::Import ('CapsuleThemeProvider', Capsule::RelativePathDecode (path ('../myThemeProvider')));

?>

<?php Capsule::Def ('UserList', function ($args, CapsuleScopeContext $scope) {
$scope->users = !isset ($args['users']) ? null : $args [ 'users' ];
?>
<?php for ( $i = 0; $i < count (is_array ($scope->users) ? $scope->users : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->users[ $i ]);
 ?>

<?php Capsule::PartialRender ('User', ['datas' => $scope->user]); ?>
<?php }  ?>
<?php }); ?>
<?php Capsule::Export ('UserList'); ?>

<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->users = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php  Capsule::PartialRender ('div', ['data-user-list' => $scope->users], Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::Yield (null, []), Capsule::CreateElement ('Mock', [])); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?>

<?php Capsule::Def ('Text', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('h4', [], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Text'); ?>

<?php Capsule::Def ('Name', function ($args, CapsuleScopeContext $scope) {
$scope->label = !isset ($args['label']) ? null : $args [ 'label' ];
?>
<?php  Capsule::PartialRender ('span', [], 'Name => ', function($args, CapsuleScopeContext $scope){return $scope->label;}); ?>
<?php }); ?>
<?php Capsule::Export ('Name'); ?>

<?php Capsule::Def ('Fragment', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::RenderYieldContext (null, []); ?>
<?php }); ?>
<?php Capsule::Export ('Fragment'); ?>

<?php Capsule::Def ('Test', function ($args, CapsuleScopeContext $scope) {
$scope->palavra = !(isset ($args ['text'])) ? null : $args ['text'];
$scope->nome = !(isset ($args ['name'])) ? null : $args ['name'];
?>
<?php  Capsule::PartialRender ('div', ['class' => "user"], Capsule::CreateElement ('h1', [], function($args, CapsuleScopeContext $scope){return $scope->palavra;}), Capsule::CreateElement ('p', [], function($args, CapsuleScopeContext $scope){return $scope->nome;})); ?>
<?php }); ?>
<?php Capsule::Export ('Test'); ?>

<?php $module->exports = Capsule::Element ('do ({ data: $users })'); ?>


  

<?php  Capsule::PartialRender ('CapsuleThemeProvider', [], Capsule::CreateElement ('Image', ['width' => 300, 'src' => "photo.jpg", 'data-href' => "/", 'data-target-href' => "/images/", 'imageCompressingRenderingSyinc' => true])); ?>



  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Sam", 'name' => "Lopes"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou a Gerda", 'name' => "Gerda"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Zeldris", 'name' => "Zeldris"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou a Melrin", 'name' => "Melrin"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Chandler", 'name' => "Chandler"]); ?>



  

<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {$ref4839182043erence = $this->names;
	if (isset ($ref4839182043erence) && is_array ($ref4839182043erence)) {
	for ($i = 0; $i < count ($ref4839182043erence); $i++) {
		$ref4839182043 = $ref4839182043erence[$i];
		if (in_array (strtolower(gettype($ref4839182043)), ['array', 'object'])) {
			$ref4839182043 = \Saml::Array2Object($ref4839182043);
			$ref4839182043_props = array_keys ((array)($ref4839182043));
			if (is_object ($ref4839182043) && in_array ('Sammy\Packs\Sami\Base\ILeanable', class_implements (get_class ($ref4839182043)))) {
				$ref4839182043_props = array_keys ((array)($ref4839182043->lean()));
			}
			foreach ($ref4839182043_props as $key) {
				if (is_right_var_name($key)) { $scope->$key = is_object ($ref4839182043) ? $ref4839182043->$key : $ref4839182043[$key]; }
			}
		}

       

 Capsule::PartialRender ('li', [], function($args, CapsuleScopeContext $scope){return $scope->name;});

      
Capsule::PartialRender ('br', []);
 
}} }); ?>



  

<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('UserForm', [])); ?>



  

<?php  Capsule::PartialRender ('App', ['title' => "My App Title Here", 'data' => $scope->users], Capsule::CreateElement ('h1', [], 'Hello, App is working...')); ?>



  
<?php Capsule::PartialRender ('Name', ['label' => $this->myFullName]); ?>



  

<?php  Capsule::PartialRender ('ul', ['data-ref' => $this->dataRef], function ($args, CapsuleScopeContext $scope) {for ( $scope->i = 0; $scope->i < 10; $scope->i++ ) { 
       

 Capsule::PartialRender ('li', [], 'YAya');

      
Capsule::PartialRender ('br', []);
 
} }); ?>




  

<?php  Capsule::PartialRender ('Text', [], 'Hello, World..!', Capsule::CreateElement ('br', []), 'kkkkk'); ?>



  

<?php  Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->users ) {
      

 Capsule::PartialRender ('h1', [], 'Hello, More..!');

      

 Capsule::PartialRender ('code', ['contentEditable' => true], 'Hello');

      
Capsule::PartialRender ('UserList', ['users' => $scope->users, 'RoundCreation' => 5]);

    
} else {
      

 Capsule::PartialRender ('span', [], 'No users');

}}); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>