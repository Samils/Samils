<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php
	Capsule::Import (['*' => 'Pages'], Capsule::RelativePathDecode (path ('./Pages')));

?>

<?php $module->exports = Capsule::Create (function () {
?>
<h1>Test 2</h1>
   <hr />

   <?php Capsule::PartialRender ('Pages.Home', ['title' => "Hello, Many Goods2u..! :)"]); ?>
<?php }); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>