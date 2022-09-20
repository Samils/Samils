<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import (['{ * }' => 'Capsule'], Capsule::RelativePathDecode (path ('capsule')));
	Capsule::Import (['{ Fragment, Button }' => 'M'], Capsule::RelativePathDecode (path ('capsule')));

?>

<?php Capsule::Def ('MyComponent', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('title', [], 'CompamyName | ', $scope->title, ' | @2021'), Capsule::CreateElement ('Text', [], 'Hello'), Capsule::CreateElement ('body', [], $scope->name)); ?>
<?php }); ?>
<?php Capsule::Export ('MyComponent'); ?>


<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
$scope->title = !(isset ($args ['title'])) ? null : $args ['title'];
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( empty ($title) ) {
        

 Capsule::PartialRender ('h1', [], Capsule::CreateElement ('Text', [], 'Bad Title'));

      
} elseif ($title ==='mundo_money') {
        

 Capsule::PartialRender ('h1', [], 'Mundo Money');

      
} else {
        

 Capsule::PartialRender ('h1', [], 'Good Title');

}}, Capsule::CreateElement ('p', [], 'Read the text Above')), function ($args, CapsuleScopeContext $scope) {$ref5529010144erence = $scope->users;
	if (isset ($ref5529010144erence) && is_array ($ref5529010144erence)) {
	for ($i = 0; $i < count ($ref5529010144erence); $i++) {
		$ref5529010144 = $ref5529010144erence[$i];
		if (in_array (strtolower(gettype($ref5529010144)), ['array', 'object'])) {
			$ref5529010144 = \Saml::Array2Object($ref5529010144);
			$ref5529010144_props = array_keys ((array)($ref5529010144));
			if (is_object ($ref5529010144) && in_array ('Sammy\Packs\Sami\Base\ILeanable', class_implements (get_class ($ref5529010144)))) {
				$ref5529010144_props = array_keys ((array)($ref5529010144->lean()));
			}
			foreach ($ref5529010144_props as $key) {
				if (is_right_var_name($key)) { $scope->$key = is_object ($ref5529010144) ? $ref5529010144->$key : $ref5529010144[$key]; }
			}
		}

       

 Capsule::PartialRender ('div', [], $scope->name);
 
}} }, Capsule::CreateElement ('content', [], Capsule::CreateElement ('p', [], 'Content Here'), function ($args, CapsuleScopeContext $scope) {for ( $scope->i = 0; $scope->i < count ($this->users); $scope->i++ ) { 
         

 Capsule::PartialRender ('h1', [], 'User Name => ', $scope->userName);
 
} }, Capsule::CreateElement ('p', [], 'End Of The user List'))); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?>

<?php $module->exports = Capsule::Element ('do ($title, { name: $userName, list: $userList })'); ?>

  <?php Capsule::PartialRender ('App', ['title' => $scope->title]);?>
@end

<?php Capsule::Def ('Mundo', function ($args, CapsuleScopeContext $scope) {
$scope->name = !isset ($args['name']) ? null : $args [ 'name' ];
?>

<?php }); ?>
<?php Capsule::Export ('Mundo'); ?>

<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('div', [], $this->users[0]->name); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>