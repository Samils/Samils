<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('App', function ($args, CapsuleScopeContext $scope) {
?>
<?php  Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('meta', ['charset' => "utf-8"]), Capsule::CreateElement ('meta', ['http-equiv' => "X-UA-Compatible", 'content' => "ie-edge"]), Capsule::CreateElement ('meta', ['name' => "viewport", 'content' => "width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1"]), function ($args, CapsuleScopeContext $scope) {$ref1711010139erence = $scope->appMetaDatas;
	if (isset ($ref1711010139erence) && is_array ($ref1711010139erence)) {
	for ($i = 0; $i < count ($ref1711010139erence); $i++) {
		$ref1711010139 = $ref1711010139erence[$i];
		if (in_array (strtolower(gettype($ref1711010139)), ['array', 'object'])) {
			$ref1711010139 = \Saml::Array2Object($ref1711010139);
			$ref1711010139_props = array_keys ((array)($ref1711010139));
			if (is_object ($ref1711010139) && in_array ('Sammy\Packs\Sami\Base\ILeanable', class_implements (get_class ($ref1711010139)))) {
				$ref1711010139_props = array_keys ((array)($ref1711010139->lean()));
			}
			foreach ($ref1711010139_props as $key) {
				if (is_right_var_name($key)) { $scope->$key = is_object ($ref1711010139) ? $ref1711010139->$key : $ref1711010139[$key]; }
			}
		}

       

 Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( isset ($name) && is_int ($name) ) {
          
Capsule::PartialRender ('meta', []);

        
} else {
          
Capsule::PartialRender ('meta', ['name' => $scope->name, 'content' => is_array ($scope->content) ? join(',', $scope->content) : $scope->content]);

}});
 
}} }); ?>
<?php }); ?>
<?php Capsule::Export ('App'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>