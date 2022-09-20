<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php $module->exports = Capsule::Create ('', function () {
?>
<?php Capsule::PartialRender ('h1', Capsule::Create (function ($args) { ?>
Group Settings..!
<?php })); ?>
<?php }); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>