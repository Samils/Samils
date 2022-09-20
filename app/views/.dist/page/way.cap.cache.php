<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import (['{ Header, Container, Panel as Div }' => 'Components'], Capsule::RelativePathDecode (path ('</components')));

?>

<?php Capsule::Def ('Way', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::PartialRender ('Components.Container', [do]);?>
      <?php Capsule::PartialRender ('Components.Header', []);?>
<?php Capsule::PartialRender ('br', []); ?>


      

<?php  Capsule::PartialRender ('h1', [], 'My Way is This'); ?>



      <?php Capsule::PartialRender ('Components.Div', []);?>
      <?php Capsule::PartialRender ('Components.Div', []);?>
      <?php Capsule::PartialRender ('Components.Div', []);?>
<?php }); ?>
<?php Capsule::Export ('Way'); ?>
@end

<?php $module->exports = Capsule::Element ('Way'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>