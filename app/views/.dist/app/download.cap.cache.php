<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('</components')));

?>

<?php Capsule::Def ('Download', function ($args, CapsuleScopeContext $scope) {
$scope->fileList = !isset ($args['fileList']) ? null : $args [ 'fileList' ];
?>
<?php  Capsule::PartialRender ('Container', [], Capsule::CreateElement ('h1', [], 'Download App Now'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('Cover', ['title' => "Hello, One..!"]), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', ['title' => "Mundik"]), Capsule::CreateElement ('Cover', []), Capsule::CreateElement ('Cover', [])); ?>
<?php }); ?>
<?php Capsule::Export ('Download'); ?>

<?php Capsule::Def ('Cover', function ($args, CapsuleScopeContext $scope) {
$scope->title = !isset ($args['title']) ? null : $args [ 'title' ];
?>
<?php  Capsule::PartialRender ('span', [], 'Cover for thse Dowsnload - ', $scope->title); ?>


   
<?php Capsule::PartialRender ('br', []); ?>
<?php }); ?>
<?php Capsule::Export ('Cover'); ?>

<?php $module->exports = Capsule::Element ('Download'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>