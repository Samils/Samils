<?php namespace App\View; use Saml; use Sami;use Sammy\Packs\Samils\Capsule\CapsuleScopeContext; use Sammy\Packs\CapsuleHelper; use Sammy\Packs\CapsuleHelper\ArrayHelper; use Sammy\Packs\CapsuleHelper\ObjectHelper;
# Capsule Body
?>
<?php Capsule::Def ('MyTest', function ($args, CapsuleScopeContext $scope) {
$scope->users = !(isset ($args ['data'])) ? [] : $args ['data'];
?>
<?php  Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'MyTest'), Capsule::CreateElement ('br', []), function ($args, CapsuleScopeContext $scope) {if ( true ) {
      
Capsule::PartialRender ('div', []);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $scope->z = 0; $scope->z < 100; $scope->z++ ) {
        

 Capsule::PartialRender ('button', [], 'Text - ', $scope->z);

        
Capsule::PartialRender ('br', []);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( count ($users) >= 1 ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $scope->x = 0; $scope->x < 100; $scope->x++ ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->x == 5 ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (range (1, 1000)) ? range (1, 1000) : []); $i++ ) {
	$scope->number = \Saml::Array2Object (range (1, 1000)[ $i ]);
                

 Capsule::PartialRender ('span', [], 'Number => ', $scope->number);

                

 Capsule::PartialRender ('div', [], Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'), Capsule::CreateElement ('h1', [], 'Hey'));

}});
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( (1 === $this->props->typeDefined || $this->props->name ==='sam') ) {
                

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
              

 Capsule::PartialRender ('h1', [], 'Tá');

}});
            

 Capsule::PartialRender ('p', [], 'N => ', $scope->x);

}});
          

 Capsule::PartialRender ('li', [], 'User Id => ', $scope->user);

}});
}});
      
Capsule::PartialRender ('button', []);

}}, function ($args, CapsuleScopeContext $scope) {if ( true && count($this->users) >= 1 ) {
      
Capsule::PartialRender ('div', []);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $scope->z = 0; $scope->z < 100; $scope->z++ ) {
        

 Capsule::PartialRender ('button', [], 'Text - ', $scope->z);

        
Capsule::PartialRender ('br', []);

Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( count ($users) >= 1 ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $scope->x = 0; $scope->x < 100; $scope->x++ ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( $scope->x == 5 ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (range (1, 1000)) ? range (1, 1000) : []); $i++ ) {
	$scope->number = \Saml::Array2Object (range (1, 1000)[ $i ]);
                

 Capsule::PartialRender ('span', [], 'Number => ', $scope->number);

}});
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( (1 === $this->props->typeDefined || $this->props->name ==='sam') ) {
                

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
              

 Capsule::PartialRender ('h1', [], 'Tá');

}});
            

 Capsule::PartialRender ('p', [], 'N => ', $scope->x);

}});
          

 Capsule::PartialRender ('li', [], 'User Id => ', $scope->user);

}});
}});
      

 Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !!!false ) {
          
Capsule::PartialRender ('button', []);

}});

}}, function ($args, CapsuleScopeContext $scope) {if ( 2 == $scope->n && (1 === $this->props->typeDefined
      || $this->props->name ==='sam'
      || $this->props->name ==='sam'
      || $this->props->name ==='saml'
      || $this->props->name ==='samj'
      || $this->props->name ==='samh'
      || $this->props->name ==='samg'
      || $this->props->name ==='samf'
      || $this->props->name ==='sam54'
      || $this->props->name ==='sam567'
      || $this->props->name ==='sam5'
      || $this->props->name ==='sam56'
      || $this->props->name ==='sam4'
      || $this->props->name ==='sam3'
      || $this->props->name ==='sam2') ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !false ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (str_word_count ('Hello, World..!')) ? str_word_count ('Hello, World..!') : []); $i++ ) {
	$scope->char = \Saml::Array2Object (str_word_count ('Hello, World..!')[ $i ]);
          

 Capsule::PartialRender ('p', [], 'Char => ', $scope->char);

}});
        

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
}}, function ($args, CapsuleScopeContext $scope) {if ( 945 == $scope->y && (1 === $this->props->typeDefined
      || $this->props->name ==='sam'
      || $this->props->name ==='sam'
      || $this->props->name ==='saml'
      || $this->props->name ==='samj'
      || $this->props->name ==='samh'
      || $this->props->name ==='samg'
      || $this->props->name ==='samf'
      || $this->props->name ==='sam54'
      || $this->props->name ==='sam567'
      || $this->props->name ==='sam5'
      || $this->props->name ==='sam56'
      || $this->props->name ==='sam4'
      || $this->props->name ==='sam3'
      || $this->props->name ==='sam2') ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !false ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (str_word_count ('Hello, World..!')) ? str_word_count ('Hello, World..!') : []); $i++ ) {
	$scope->char = \Saml::Array2Object (str_word_count ('Hello, World..!')[ $i ]);
          

 Capsule::PartialRender ('p', [], 'Char => ', $scope->char);

}});
        

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
}}, function ($args, CapsuleScopeContext $scope) {if ( 873 == $scope->z && (1 === $this->props->typeDefined
      || $this->props->name ==='sam'
      || $this->props->name ==='sam'
      || $this->props->name ==='saml'
      || $this->props->name ==='samj'
      || $this->props->name ==='samh'
      || $this->props->name ==='samg'
      || $this->props->name ==='samf'
      || $this->props->name ==='sam54'
      || $this->props->name ==='sam567'
      || $this->props->name ==='sam5'
      || $this->props->name ==='sam56'
      || $this->props->name ==='sam4'
      || $this->props->name ==='sam3'
      || $this->props->name ==='sam2') ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !false ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (str_word_count ('Hello, World..!')) ? str_word_count ('Hello, World..!') : []); $i++ ) {
	$scope->char = \Saml::Array2Object (str_word_count ('Hello, World..!')[ $i ]);
          

 Capsule::PartialRender ('p', [], 'Char => ', $scope->char);

}});
        

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
}}, function ($args, CapsuleScopeContext $scope) {if ( 873 == $scope->z && (1 === $this->props->typeDefined
      || $this->props->name ==='sam'
      || $this->props->name ==='sam'
      || $this->props->name ==='saml'
      || $this->props->name ==='samj'
      || $this->props->name ==='samh'
      || $this->props->name ==='samg'
      || $this->props->name ==='samf'
      || $this->props->name ==='sam54'
      || $this->props->name ==='sam567'
      || $this->props->name ==='sam5'
      || $this->props->name ==='sam56'
      || $this->props->name ==='sam4'
      || $this->props->name ==='sam3'
      || $this->props->name ==='sam2') ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( !false ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {for ( $i = 0; $i < count (is_array (str_word_count ('Hello, World..!')) ? str_word_count ('Hello, World..!') : []); $i++ ) {
	$scope->char = \Saml::Array2Object (str_word_count ('Hello, World..!')[ $i ]);
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {if ( in_array ($char, ['H', 'O']) ) {
            
Capsule::PartialRender ('p', []);

            

 Capsule::PartialRender ('div', [], 'HI007', function ($args, CapsuleScopeContext $scope) {if ( $this->ya ) {
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr2334010142ay = $scope->someNumberList; for ( $i2334010142terator = 0; $i2334010142terator < count (is_array ($arr2334010142ay) ? $arr2334010142ay : []); $i2334010142terator++ ) {
	$scope->someNumber = \Saml::Array2Object ($arr2334010142ay[ $i2334010142terator ]);
                  
Capsule::PartialRender ('Number', ['value' => $scope->someNumber]);

}});
Capsule::PartialRender ('Fragment', [], function ($args, CapsuleScopeContext $scope) {$arr8044010142ay = $scope->someAnotherDataMap; for ( $i8044010142terator = 0; $i8044010142terator < count (is_array ($arr8044010142ay) ? $arr8044010142ay : []); $i8044010142terator++ ) {
	$scope->someAnotherData = \Saml::Array2Object ($arr8044010142ay[ $i8044010142terator ]);
                  

 Capsule::PartialRender ('Fragment', [], Capsule::CreateElement ('SomeData', array_merge ((is_array ($ref01014225089238e = $scope->someAnotherData) ? $ref01014225089238e : []), ['name' => "Sam"])));

}});
}});

}});
          

 Capsule::PartialRender ('p', [], 'Char => ', $scope->char);

}});
        

 Capsule::PartialRender ('span', [], 'I am Sam!!!!');

}});
}}); ?>
<?php }); ?>
<?php Capsule::Export ('MyTest'); ?>

<?php $module->exports = Capsule::Element ('MyTest'); ?><?php if (!(is_object ($module->exports) && $module->exports instanceof Capsule)) { $module->exports = Capsule::Create (function () {}); }?>