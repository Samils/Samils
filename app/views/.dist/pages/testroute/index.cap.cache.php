<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('$myPhoto', Capsule::RelativePathDecode (path ('./myPhoto.jpg')));

?>

<?php
	Capsule::Import ('$logo', Capsule::RelativePathDecode (path ('@views/foto.jpg')));

?>


<?php
	Capsule::Import ('$myData', Capsule::RelativePathDecode (path ('./data.json')));

?>


<?php
	Capsule::Import ('$iconPlanTurbo', Capsule::RelativePathDecode (path ('./icon-plan-turbo.svg')));

?>


<?php
	Capsule::Import ('$tomcat', Capsule::RelativePathDecode (path ('./tomcat.png')));

?>


<?php
	Capsule::Import ('$styles', Capsule::RelativePathDecode (path ('./styles')));

?>


<?php
	Capsule::Import ('Center', Capsule::RelativePathDecode (path ('./Center')));

?>

<?php Capsule::Def ('TestRoutePage', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? null : $args ['data'];
?>
<?php  Capsule::PartialRender ('fragment', [], Capsule::CreateElement ('Center', [], 'Hello, Mann..!'), Capsule::CreateElement ('img', ['width' => 300, 'src' => $scope->myPhoto]), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->users) ? $scope->users : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->users[ $i ]);

        

 Capsule::PartialRender ('li', [], Capsule::CreateElement ('strong', [], 'Name =>'), $scope->user->name);

} }), Capsule::CreateElement ('br', []), 'Ysare inc.', Capsule::CreateElement ('h1', [], $this->testName), Capsule::CreateElement ('br', []), $this->someNames, Capsule::CreateElement ('img', ['src' => $scope->iconPlanTurbo]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('img', ['src' => $scope->tomcat]), Capsule::CreateElement ('ul', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array ($scope->myData['users']) ? $scope->myData['users'] : []); $i++ ) {
	$scope->user = \Saml::Array2Object ($scope->myData['users'][ $i ]);

        

 Capsule::PartialRender ('li', [], $scope->user->name);

} }), Capsule::CreateElement ('br', []), Capsule::CreateElement ('h1', ['style' => $scope->styles['text'], 'class' => [
        'name',
        'email',
        'users',
        'mundo'
      ]], 'Hello, World..!'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('span', ['style' => $scope->styles['paragraph']], 'I am Sam, and I am on ils -> name'), Capsule::CreateElement ('h3', [], 'foto => ', $scope->logo), Capsule::CreateElement ('h1', ['style' => $scope->styles['text']], 'Image 2'), Capsule::CreateElement ('img', ['style' => $scope->styles['image'], 'width' => 200, 'src' => $scope->logo])); ?>
<?php }); ?>
<?php Capsule::Export ('TestRoutePage'); ?>

<?php $module->exports = Capsule::Element ('TestRoutePage'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>