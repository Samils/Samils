<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Sass', Capsule::RelativePathDecode (path ('styles')));

?>

<?php Capsule::Def ('SubTitle', function ($args, CapsuleScopeContext $scope) {
$scope->text = !isset ($args['text']) ? null : $args [ 'text' ];
?>
<?php  Capsule::PartialRender ('div', [], function($args, CapsuleScopeContext $scope){return $scope->text;}); ?>
<?php }); ?>
<?php Capsule::Export ('SubTitle'); ?>

<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Sass', [], 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white', 'div', 'width: 300px', 'border: 1px solid white', 'h1', 'color: red', 'font-size: 15px', 'p', 'color: white', 'font-size: 8px', '&:hover', 'color: white'); ?>



  

<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'My Title Here'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!'), Capsule::CreateElement ('SubTitle', ['text' => "My Subtitle here..!"]), Capsule::CreateElement ('p', [], 'some great saying..!')); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?>

<?php $module->exports = Capsule::Element ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>