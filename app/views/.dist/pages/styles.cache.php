<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php
	Capsule::Import (['*' => 'Pages'], Capsule::RelativePathDecode (path ('./pages')));

?>

<?php Capsule::Def ('Home', function () {
?>
<?php Capsule::PartialRender ('Pages.Home'); ?>

<?php }); ?>
<?php Capsule::Export ('Home'); ?>

<?php $module->exports = Capsule::Element ('Home'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>