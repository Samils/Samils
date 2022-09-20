<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Export ('Header do'); ?>

  

<?php  Capsule::PartialRender ('header', [], Capsule::CreateElement ('h1', [], 'Title Here')); ?>


@end

<?php Capsule::Export ('Footer do'); ?>

  

<?php  Capsule::PartialRender ('footer', [], Capsule::CreateElement ('span', [], 'Footer Here')); ?>


@end

<?php Capsule::Export ('Main do'); ?>

  

<?php  Capsule::PartialRender ('div', ['class' => "main container"], Capsule::Yield (null, [])); ?>


@end


<?php Capsule::Export ('Container do'); ?>

  

<?php  Capsule::PartialRender ('div', ['style' => "width: 700px;background: red;", 'class' => "container"], Capsule::Yield (null, [])); ?>


@end

<?php Capsule::Export ('Panel do'); ?>

  <h4>Panel Component Works..!</h3>
@end<?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>