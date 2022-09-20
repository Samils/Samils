<?php namespace App\View; use Saml; use Sami;
# Capsule Body
?>
<?php
	Capsule::Import ('Container', Capsule::RelativePathDecode (path ('</components')));

?>

<?php
	Capsule::Import ('Panel', Capsule::RelativePathDecode (path ('</components')));

?>

<?php Capsule::Def ('Text', function ($args) {
$content = !isset ($args['content']) ? null : $args [ 'content' ];
$color = !isset ($args['color']) ? 'green' : $args [ 'color' ];
?>
<span style=<?= '"color: '.$color.'"' ?> >
      <?= !isset ($content) ? null : str ($content) ?>
   </span>
<?php }); ?>
<?php Capsule::Export ('Text'); ?>

<?php Capsule::Def ('Title', function () {
?>
<h3>App Title Here</h3>
<?php }); ?>
<?php Capsule::Export ('Title'); ?>

<?php Capsule::Def ('List', function ($args) {
$title = !isset ($args['title']) ? null : $args [ 'title' ];
?>
<div style="background: #ffffff; max-width: 300px; border: 1px solid #dddddd;padding: 10px;margin: 40px;">
      <h3><?= !isset ($title) ? null : str ($title) ?></h3>
      <hr />
      <ul>
         <?php Capsule::Yield ([]); ?>
      </ul>
   </div>
<?php }); ?>
<?php Capsule::Export ('List'); ?>


<?php Capsule::Def ('Test', function () {
?>

<?php Capsule::PartialRender ('Container', Capsule::Create (function ($args) { ?>
<h1>Hello, Man..!</h1>
      <?php Capsule::PartialRender ('Title'); ?>


      
<?php Capsule::PartialRender ('List', ['title' => "TODOS"], Capsule::Create (function ($args) { ?>
<li>Fazer café</li>
         <li>Preencer o inquérito da WWAme sobre HOPE</li>
         <li>Avaliar a WWAme</li>
<?php })); ?>

      
<?php Capsule::PartialRender ('List', ['title' => "Amigos"], Capsule::Create (function ($args) { ?>
<li>Dino Gabriel</li>
         <li>António Fernando</li>
         <li>Elizandro Aragão</li>
         <li>Samuel Etoo</li>
<?php })); ?>


      
<?php Capsule::PartialRender ('List', ['title' => "Inimigos"], Capsule::Create (function ($args) { ?>
<li>Agostinho Sambo Lopes</li>
<?php })); ?>

      <?php Capsule::PartialRender ('Text', ['content' => 'I am Sam', 'color' => "gold"]); ?>

      <br />
      <?php Capsule::PartialRender ('Text', ['content' => 'Hello, Guy', 'color' => "deepskyblue"]); ?>

      <br />
      <?php Capsule::PartialRender ('Text', ['content' => 'This is just a Text']); ?>

<?php })); ?>
<?php }); ?>
<?php Capsule::Export ('Test'); ?>

<?php $module->exports = Capsule::Element ('Test'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>