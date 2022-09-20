<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('User', Capsule::RelativePathDecode (path ('./User')));

?>

<?php
	Capsule::Import ('UserForm', Capsule::RelativePathDecode (path ('./UserForm')));

?>


<?php
	Capsule::Import ('Image', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('CapsuleThemeProvider', Capsule::RelativePathDecode (path ('../myThemeProvider')));
	Capsule::Import ('CapsuleThemeContainer', Capsule::RelativePathDecode (path ('../myThemeProvider')));
	Capsule::Import ('Theme', Capsule::RelativePathDecode (path ('../myThemeProvider')));
	Capsule::Import ('Fragment', Capsule::RelativePathDecode (path ('../myThemeProvider')));
	Capsule::Import ('Button', Capsule::RelativePathDecode (path ('../myThemeProvider')));

?>


<?php
	Capsule::Import ('About', Capsule::RelativePathDecode (path ('./about')));

?>

<?php Capsule::Def ('UserList', function ($args, CapsuleScopeContext $scope) {
$scope->users = !isset ($args['users']) ? null : $args [ 'users' ];
?>
<?php  Capsule::PartialRender ('h3', [], $scope->users); ?>



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
<?php  Capsule::PartialRender ('div', ['data-user-list' => $scope->users], Capsule::CreateElement ('h1', [], $scope->title), Capsule::Yield (null, [])); ?>
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
<?php  Capsule::PartialRender ('span', [], 'Name => ', $scope->label); ?>
<?php }); ?>
<?php Capsule::Export ('Name'); ?>

<?php Capsule::Def ('Fragment', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('Fragment'); ?>

<?php Capsule::Def ('Test', function ($args, CapsuleScopeContext $scope) {
$scope->palavra = !(isset ($args ['text'])) ? null : $args ['text'];
$scope->nome = !(isset ($args ['name'])) ? null : $args ['name'];
?>
<?php  Capsule::PartialRender ('div', ['class' => "user"], Capsule::CreateElement ('h1', [], $scope->palavra), Capsule::CreateElement ('p', [], $scope->nome)); ?>
<?php }); ?>
<?php Capsule::Export ('Test'); ?>

<?php Capsule::Def ('MyImage', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('CapsuleThemeProvider', [], Capsule::CreateElement ('CapsuleThemeContainer', [], Capsule::CreateElement ('Theme', ['name' => "dark"], Capsule::CreateElement ('Button', [], 'Click Me..!'), Capsule::CreateElement ('Fragment', [], Capsule::Yield (null, []))))); ?>
<?php }); ?>
<?php Capsule::Export ('MyImage'); ?>

<?php Capsule::Def ('Index', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php Capsule::PartialRender ('About', ['userList' => $scope->users]); ?>



  

<?php  Capsule::PartialRender ('MyImage', [], Capsule::CreateElement ('Image', ['width' => 300, 'src' => "photo.jpg", 'data-href' => "/", 'data-target-href' => "/images/", 'imageCompressingRenderingSyinc' => true])); ?>



  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Sam", 'name' => "Lopes"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou a Gerda", 'name' => "Gerda"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Zeldris", 'name' => "Zeldris"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou a Melrin", 'name' => "Melrin"]); ?>


  
<?php Capsule::PartialRender ('Test', ['text' => "Eu sou o Chandler", 'name' => "Chandler"]); ?>



  

<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {$ref9685010141erence = $scope->data;
	if (isset ($ref9685010141erence) && is_array ($ref9685010141erence)) {
	for ($i = 0; $i < count ($ref9685010141erence); $i++) {
		$ref9685010141 = $ref9685010141erence[$i];
		if (in_array (strtolower(gettype($ref9685010141)), ['array', 'object'])) {
			$ref9685010141 = \Saml::Array2Object($ref9685010141);
			$ref9685010141_props = array_keys ((array)($ref9685010141));
			if (is_object ($ref9685010141) && in_array ('Sammy\Packs\Sami\Base\ILeanable', class_implements (get_class ($ref9685010141)))) {
				$ref9685010141_props = array_keys ((array)($ref9685010141->lean()));
			}
			foreach ($ref9685010141_props as $key) {
				if (is_right_var_name($key)) { $scope->$key = is_object ($ref9685010141) ? $ref9685010141->$key : $ref9685010141[$key]; }
			}
		}

       

 Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('li', [], 'Nome => ', $scope->name));
 
}} }); ?>



  
<?php Capsule::PartialRender ('UserForm', []); ?>



  

<?php  Capsule::PartialRender ('App', ['title' => "My App Title Here", 'data' => $scope->users], Capsule::CreateElement ('h1', [], 'Hello, App is working...')); ?>



  
<?php Capsule::PartialRender ('Name', ['label' => $this->myFullName]); ?>



  

<?php  Capsule::PartialRender ('ul', ['data-ref' => $this->dataRef], function ($args, CapsuleScopeContext $scope) {for ( $scope->i = 0; $scope->i < 10; $scope->i++ ) { 
       

 Capsule::PartialRender ('li', [], 'YAya');
 
} }); ?>




  

<?php  Capsule::PartialRender ('Text', [], 'Hello, World..!', Capsule::CreateElement ('br', []), 'kkkkk'); ?>



  <?php if ( $scope->users ) { ?>

    

<?php  Capsule::PartialRender ('h1', [], 'Hello, More..!'); ?>



    

<?php  Capsule::PartialRender ('code', ['contentEditable' => true], 'Hello'); ?>



    
<?php Capsule::PartialRender ('br', []); ?>




    
<?php Capsule::PartialRender ('UserList', ['users' => $scope->users, 'RoundCreation' => 5]); ?>


  
<?php } else { ?>
    

<?php  Capsule::PartialRender ('span', [], 'No users'); ?>
<?php } ?>
<?php }); ?>
<?php Capsule::Export ('Index'); ?>

<?php $module->exports = Capsule::Element ('Index'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>