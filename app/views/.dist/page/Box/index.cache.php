<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php Capsule::Def ('Box', function () {
?>

<?php Capsule::PartialRender ('div', Capsule::Create (function ($args) { ?>
<?php Capsule::Yield ([]); ?>
<?php })); ?>
<?php }); ?>
<?php Capsule::Export ('Box'); ?>

<?php $module->exports = Capsule::Create ('', function ($args) {
$title = !isset ($args['title']) ? null : $args [ 'title' ];
$body = !isset ($args['body']) ? null : $args [ 'body' ];
?>
<?php Capsule::PartialRender ('div', Capsule::Create (function ($args) { ?>
Yaya
<?php })); ?>
<?php }); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>