<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('ApplicationMetaDatas', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Styles', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php
	Capsule::Import ('Scripts', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('Style', Capsule::RelativePathDecode (path ('capsule')));

?>

<?php Capsule::Def ('Application', function ($args, CapsuleScopeContext $scope) {
$scope->data = !(isset ($args ['data'])) ? null : $args ['data'];
$scope->children = !(isset ($args ['children'])) ? null : $args ['children'];
?>
<?php  Capsule::PartialRender ('html', ['lang' => "pt-BR"], Capsule::CreateElement ('head', [], Capsule::CreateElement ('title', [], 'App Test'), Capsule::CreateElement ('ApplicationMetaDatas', []), Capsule::CreateElement ('Style', ['href' => "styles.css"]), Capsule::CreateElement ('Scripts', []), Capsule::CreateElement ('Styles', [])), Capsule::CreateElement ('body', [], Capsule::CreateElement ('div', ['class' => "container"], Capsule::Yield (null, ['data' => $scope->data])))); ?>
<?php }); ?>
<?php Capsule::Export ('Application'); ?>

<?php $module->exports = Capsule::Element ('Application'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>