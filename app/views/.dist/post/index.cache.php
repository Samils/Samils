<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php
	Capsule::Import ('', Capsule::RelativePathDecode (path ('</components>' import ( Header, Aside, Footer, Main
))));

?>

<?php Capsule::Def ('Post', function ($args) {
$title = !isset ($args['title']) ? null : $args [ 'title' ];
$body = !isset ($args['body']) ? null : $args [ 'body' ];
?>
<div style="border: 1px solid #ccc;padding:13px 11px; box-sizing: border-box; margin: 7px .0px; max-width: 400px;">
      <h1><?= !isset ($title) ? null : str ($title) ?></h1>
      <p><?= !isset ($body) ? null : str ($body) ?></p>
   </div>
<?php }); ?>
<?php Capsule::Export ('Post'); ?>


<?php Capsule::Def ('Posts', function () {
?>
<?php Capsule::PartialRender ('Header', []);?>

   <?php Capsule::PartialRender ('Main', [], Capsule::Create (function () {
?>
<h1>Posts</h1>
      <br />
      <ul>
         <?php $ref6864101902erence = $this->posts;
	if (isset ($ref6864101902erence) && is_array ($ref6864101902erence)) {
	for ($i = 0; $i < count ($ref6864101902erence); $i++) {
		$ref6864101902 = $ref6864101902erence[$i];
		if (in_array (strtolower(gettype($ref6864101902)), ['array', 'object'])) {
			$ref6864101902 = \Saml::Array2Object($ref6864101902);
			$ref6864101902_props = array_keys ((array)($ref6864101902));
			if (in_array ('Sammy\Packs\Sami\Base\ILinable', class_implements (get_class ($ref6864101902)))) {
				$ref6864101902_props = array_keys ((array)($ref6864101902->lean()));
			}
			foreach ($ref6864101902_props as $key) {
				if (is_right_var_name($key)) { $$key = $ref6864101902->$key; }
			}
		}
?>
 
            <?php Capsule::PartialRender ('Post', ['title' => $title, 'body' => $body]);?>
<?php }} ?>
      </ul>
<?php })); ?>


   <?php Capsule::PartialRender ('Footer', []);?>
<?php }); ?>
<?php Capsule::Export ('Posts'); ?>

<?php $module->exports = Capsule::Element ('Posts'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>