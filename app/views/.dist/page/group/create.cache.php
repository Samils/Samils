<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php Capsule::Def ('CreatePageGroup', function () {
?>

<?php Capsule::PartialRender ('h1', Capsule::Create (function ($args) { ?>
Criar Grupo
<?php })); ?>
<?php }); ?>
<?php Capsule::Export ('CreatePageGroup'); ?>

<?php $module->exports = Capsule::Element ('CreatePageGroup'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>