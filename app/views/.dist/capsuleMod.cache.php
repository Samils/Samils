<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('meta', ['charset' => "utf-8"]), Capsule::CreateElement ('meta', ['http-equiv' => "X-UA-Compatible", 'content' => "ie-edge"]), Capsule::CreateElement ('meta', ['name' => "viewport", 'content' => "width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1"]), function ($args, CapsuleScopeContext $scope) {$ref5071182043erence = $scope->appMetaDatas;
	if (isset ($ref5071182043erence) && is_array ($ref5071182043erence)) {
	for ($i = 0; $i < count ($ref5071182043erence); $i++) {
		$ref5071182043 = $ref5071182043erence[$i];
		if (in_array (strtolower(gettype($ref5071182043)), ['array', 'object'])) {
			$ref5071182043 = \Saml::Array2Object($ref5071182043);
			$ref5071182043_props = array_keys ((array)($ref5071182043));
			if (is_object ($ref5071182043) && in_array ('Sammy\Packs\Sami\Base\ILeanable', class_implements (get_class ($ref5071182043)))) {
				$ref5071182043_props = array_keys ((array)($ref5071182043->lean()));
			}
			foreach ($ref5071182043_props as $key) {
				if (is_right_var_name($key)) { $scope->$key = is_object ($ref5071182043) ? $ref5071182043->$key : $ref5071182043[$key]; }
			}
		}

       

 Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( isset ($scope->name) && is_int ($scope->name) ) {
          
Capsule::PartialRender ('meta', []);

        
} else {
          
Capsule::PartialRender ('meta', ['name' => $scope->name, 'content' => is_array ($scope->content) ? join(',', $scope->content) : $scope->content]);

}});
 
}} }); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>