<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php
	Capsule::Import ('Fragment', Capsule::RelativePathDecode (path ('capsule')));

?>


<?php
	Capsule::Import ('TextField', Capsule::RelativePathDecode (path ('./TextField')));

?>

<?php Capsule::Def ('MyPage', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('h1', [], 'Criar Conta'), Capsule::CreateElement ('form', ['style' => ['backgroundColor' => '#ffffff','width' => 500,'padding' => 40,'border' => '2px solid #cccccc','margin' => 30
      ], 'action' => "/", 'method' => "post"], Capsule::CreateElement ('TextField', ['label' => "Seu nome"]), Capsule::CreateElement ('TextField', ['label' => "Seu email"]), Capsule::CreateElement ('TextField', ['label' => "Seu site"]), Capsule::CreateElement ('TextField', ['label' => "Seu terminal"]), Capsule::CreateElement ('TextField', ['label' => "Seu canal"]), Capsule::CreateElement ('TextField', ['label' => "Seu Grupo"]), Capsule::CreateElement ('TextField', ['label' => "Seu Sexo"]), Capsule::CreateElement ('TextField', ['label' => "Seu País"]), Capsule::CreateElement ('TextField', ['label' => "Seu Bairro"]), Capsule::CreateElement ('TextField', ['label' => "Seu Sobrenome"]), Capsule::CreateElement ('TextField', ['label' => "Seu Planeta"]), Capsule::CreateElement ('TextField', ['label' => "Seu Clube"]))); ?>
<?php }); ?>
<?php Capsule::Export ('MyPage'); ?>

<?php $module->exports = Capsule::Element ('MyPage'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>