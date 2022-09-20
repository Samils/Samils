<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('User', Capsule::RelativePathDecode (path ('../User')));

?>

<?php Capsule::Def ('TestRouteContainer', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', ['id' => "test-route-container"], Capsule::Yield (null, [])); ?>
<?php }); ?>
<?php Capsule::Export ('TestRouteContainer'); ?>

<?php Capsule::Def ('MyContainer', function ($args, CapsuleScopeContext $scope) {
$scope->children = !isset ($args['children']) ? null : $args [ 'children' ];
?>
<?php  Capsule::PartialRender ('div', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->children) ? $scope->children : []); $i++ ) {
	$scope->child = \Saml::Array2Object ($scope->children[ $i ]);

      

 Capsule::PartialRender ('div', ['class' => "user"], function($args, CapsuleScopeContext $scope){return $scope->child;});

} }); ?>
<?php }); ?>
<?php Capsule::Export ('MyContainer'); ?>

<?php Capsule::Def ('TestComponent', function ($args, CapsuleScopeContext $scope) {
$scope->data = !isset ($args['data']) ? null : $args [ 'data' ];
?>
<?php Capsule::RenderYieldContext (null, ['num' => "5", 'text' => "Mundo", 'foo' => 'Bar', 'data' => $scope->data]); ?>
<?php }); ?>
<?php Capsule::Export ('TestComponent'); ?>

<?php Capsule::Def ('Print', function ($args, CapsuleScopeContext $scope) {
$scope->name = !isset ($args['name']) ? null : $args [ 'name' ];
?>
<?php  Capsule::PartialRender ('Fragment', [], function($args, CapsuleScopeContext $scope){return $scope->name;}); ?>
<?php }); ?>
<?php Capsule::Export ('Print'); ?>

<?php Capsule::Def ('Gara', function ($args, CapsuleScopeContext $scope) {
$scope->datas = !isset ($args['datas']) ? null : $args [ 'datas' ];
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('Print', array_merge ((is_array ($ref06204520092193e = $scope->datas) ? $ref06204520092193e : []), []))); ?>
<?php }); ?>
<?php Capsule::Export ('Gara'); ?>

<?php Capsule::Def ('NarutoClone', function ($args, CapsuleScopeContext $scope) {
$scope->props = ArrayHelper::PropsBeyond (['children'], $args);
?>
<?php  Capsule::PartialRender ('h4', [], 'Props => ', function($args, CapsuleScopeContext $scope){return str($scope->props);}); ?>
<?php }); ?>
<?php Capsule::Export ('NarutoClone'); ?>

<?php Capsule::Def ('Input', function ($args, CapsuleScopeContext $scope) {
$scope->name = !isset ($args['name']) ? null : $args [ 'name' ];
$scope->placeholder = !isset ($args['placeholder']) ? null : $args [ 'placeholder' ];
$scope->scope->props = ArrayHelper::PropsBeyond (['children', 'name', 'placeholder'], $args);
?>
<?php Capsule::PartialRender ('input', array_merge ((is_array ($ref06204520094451e = $scope->props) ? $ref06204520094451e : []), ['name' => 'input-' . $scope->name, 'placeholder' => $scope->placeholder ? $scope->placeholder : $scope->name])); ?>
<?php }); ?>
<?php Capsule::Export ('Input'); ?>

<?php Capsule::Def ('Naruto', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
$scope->scope->rest = ArrayHelper::PropsBeyond (['children', 'title'], $args);
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'NarutoTitle =>  ', function($args, CapsuleScopeContext $scope){return $scope->title;}), Capsule::CreateElement ('NarutoClone', array_merge ((is_array ($ref06204520095533e = $scope->rest) ? $ref06204520095533e : []), []))); ?>
<?php }); ?>
<?php Capsule::Export ('Naruto'); ?>

<?php Capsule::Def ('Users', function ($args, CapsuleScopeContext $scope) {
$scope->users = !isset ($args['users']) ? null : $args [ 'users' ];
?>
<?php  Capsule::PartialRender ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->users) ? $scope->users : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->users[ $i ]);

      
Capsule::PartialRender ('User', ['datas' => $scope->user]);

} }); ?>
<?php }); ?>
<?php Capsule::Export ('Users'); ?>

<?php $module->exports = Capsule::Element ('do ({title: $appTitle, $data})'); ?>

  

<?php  Capsule::PartialRender ('TestRouteContainer', [], Capsule::CreateElement ('h1', [], 'YEY... Test Route Works -> ', function($args, CapsuleScopeContext $scope){return $scope->appTitle;}, ' ..!'), Capsule::CreateElement ('Users', ['users' => $scope->data]), Capsule::CreateElement ('Naruto', ['title' => "Olá Naruto", 'name' => "Naruto Uzumaki", 'aldeia' => "Floha", 'idade' => 15, 'esposa' => "Hinata Hyuga", 'sexo' => "Masculino"]), Capsule::CreateElement ('Input', ['name' => "name", 'type' => "text", 'placeholder' => "Seu Nome"]), Capsule::CreateElement ('Input', ['name' => "email", 'type' => "email"]), Capsule::CreateElement ('Gara', ['datas' => ['name' => "Sambo Lopes"]]), Capsule::CreateElement ('TestComponent', [], Capsule::CreateElement ('Fragment', [], Capsule::CreateElement ('br', []), Capsule::CreateElement ('h1', [], 'Hello, World..!'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', [])), Capsule::CreateElement ('input', ['type' => "email", 'placeholder' => "Seu Email"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('input', ['type' => "password", 'placeholder' => "Sua Senha"]), Capsule::CreateElement ('br', [])), Capsule::CreateElement ('MyContainer', [], 'YAYAY', Capsule::CreateElement ('a', [], Capsule::CreateElement ('h1', [], 'My Name Here')), Capsule::CreateElement ('span', [], 'Mundo Doido'), Capsule::CreateElement ('input', ['type' => "color"]), Capsule::CreateElement ('input', ['type' => "text", 'value' => rand (1, 300)])), Capsule::CreateElement ('div', ['style' => [ 'color' => 'red' ]], 'Hello, My One..!!!')); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>