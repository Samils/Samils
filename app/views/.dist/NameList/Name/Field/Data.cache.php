<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Fragment', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php Capsule::Def ('Data', function ($args, CapsuleScopeContext $scope) {
?>
<?php Capsule::PartialRender ('Fragment', []); ?>
<?php }); ?>
<?php Capsule::Export ('Data'); ?>

<?php Capsule::Export ('Data'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>