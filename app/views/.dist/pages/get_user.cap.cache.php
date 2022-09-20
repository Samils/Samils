<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('User', Capsule::RelativePathDecode (path ('./User')));

?>

<?php Capsule::Def ('Profile', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('a', ['href' => "/"], 'Home'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('User', ['datas' => $this->user])); ?>
<?php }); ?>
<?php Capsule::Export ('Profile'); ?>

<?php $module->exports = Capsule::Element ('Profile'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>