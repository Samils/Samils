<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php
	Capsule::Import ('Header', Capsule::RelativePathDecode (path ('./header')));

?>

<?php
	Capsule::Import ('Footer', Capsule::RelativePathDecode (path ('./footer')));

?>


<?php
	Capsule::Import ('Box', Capsule::RelativePathDecode (path ('./Box')));

?>

<?php Capsule::Def ('Post', function ($args) {
$title = !isset ($args['title']) ? null : $args [ 'title' ];
$body = !isset ($args['body']) ? null : $args [ 'body' ];
?>
<div class="post" style="background: #ffffff;border: 1px solid #ccc;margin: .0px .0px 12px;">
      <h1><?= !isset ($title) ? null : str ($title) ?></h1>
      <p><?= !isset ($body) ? null : str ($body) ?></p>
   </div>
<?php }); ?>
<?php Capsule::Export ('Post'); ?>

<?php Capsule::Def ('IndexPage', function () {
?>
<?php Capsule::PartialRender ('Header', ['title' => "Samy"]); ?>


   <h1>Hello, World..!</h1>

   
<?php Capsule::PartialRender ('Box', Capsule::Create (function ($args) { ?>
<span>Hello, World..!</span>
<?php })); ?>



   <ul>
      <?php $arr9039101901ay = range (1, 100); for ( $i9039101901terator = 0; $i9039101901terator < count ($arr9039101901ay); $i9039101901terator++ ) {
	$num = \Saml::Array2Object ($arr9039101901ay[ $i9039101901terator ]);
?>

         <li><?= !isset ($num) ? null : str ($num) ?></li>
         <br />
<?php } ?>
   </ul>

   <?php Capsule::PartialRender ('Footer', ['siteName' => 'Sam Inc'], Capsule::Create (function ($args) {
$year = !isset ($args['year']) ? null : $args [ 'year' ];
?>
<span>All Rights Here: <?= !isset ($year) ? null : str ($year) ?></span>
      <?php Capsule::Yield ([], Capsule::Create (function () {
?>
<i>(i)</i>
<?php })); ?>
<?php })); ?>

<?php }); ?>
<?php Capsule::Export ('IndexPage'); ?>

<?php $module->exports = Capsule::Element ('IndexPage'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>