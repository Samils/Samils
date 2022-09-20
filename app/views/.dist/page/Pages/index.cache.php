<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php Capsule::Export ('Home', function ($args) {
$title = !isset ($args['title']) ? null : $args [ 'title' ];
?>
<?php Capsule::PartialRender ('h1', Capsule::Create (function ($args) { ?>
Home Page Works..!
<?php })); ?>
   
<?php Capsule::PartialRender ('p', Capsule::Create (function ($args) { ?>
<?= !isset ($title) ? null : str ($title) ?>
<?php })); ?>
<?php }); ?>



<?php Capsule::Export ('About', function () {
?>
<?php Capsule::PartialRender ('h1', Capsule::Create (function ($args) { ?>
About Page Works..!
<?php })); ?>
<?php }); ?>



<?php Capsule::Export ('Contact', function () {
?>
<?php Capsule::PartialRender ('h1', Capsule::Create (function ($args) { ?>
Contact Page Works..!
<?php })); ?>
<?php }); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>