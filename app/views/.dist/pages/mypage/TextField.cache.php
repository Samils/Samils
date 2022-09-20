<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('$styles', Capsule::RelativePathDecode (path ('./textFieldStyles')));

?>

<?php Capsule::Def ('TextField', function ($args, CapsuleScopeContext $scope) {
$scope->text = !(isset ($args ['label'])) ? null : $args ['label'];
?>
<?php function($args, CapsuleScopeContext $scope){return $scope->for = 'TextField' . rand (001, 9999);;} ?>

  

<?php  Capsule::PartialRender ('label', ['for' => $scope->for, 'style' => $scope->styles['label']], function($args, CapsuleScopeContext $scope){return $scope->text;}); ?>



  
<?php Capsule::PartialRender ('input', array_merge ((is_array ($ref06204520097361e = $scope->props) ? $ref06204520097361e : []), ['spellcheck' => false, 'autocomplete' => "off", 'autocorrect' => "off", 'style' => $scope->styles['input'], 'type' => "text", 'id' => $scope->for])); ?>
<?php }); ?>
<?php Capsule::Export ('TextField'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>