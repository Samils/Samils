<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('MyForm', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('form', ['method' => "post", 'action' => "/saveuser"], Capsule::CreateElement ('input', ['name' => "user[name]", 'type' => "text", 'placeholder' => "Digite seu nome..!"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('input', ['name' => "user[email]", 'type' => "email", 'placeholder' => "Digite seu email..!"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('input', ['name' => "user[password]", 'type' => "password", 'placeholder' => "Digite sua senha..!"]), Capsule::CreateElement ('br', []), Capsule::CreateElement ('br', []), Capsule::CreateElement ('button', ['type' => "submit"], 'Create User')); ?>
<?php }); ?>
<?php Capsule::Export ('MyForm'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>