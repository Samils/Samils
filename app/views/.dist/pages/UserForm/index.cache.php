<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('UserForm', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('form', ['method' => "post", 'action' => "/users"], Capsule::CreateElement ('label', [], 'Name'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('input', ['type' => "text", 'name' => "user[NAME]"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('label', [], 'Email'), Capsule::CreateElement ('br', []), Capsule::CreateElement ('input', ['type' => "text", 'name' => "user[email]"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('button', ['type' => "submit"], Capsule::CreateElement ('span', [], 'Save User'))); ?>
<?php }); ?>
<?php Capsule::Export ('UserForm'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>