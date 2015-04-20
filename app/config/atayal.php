<?php
return [
    // These modules are actually just laravel packages
    'modules' => [
        'main' => [
            ['atayal/frame', 'Frame', ]
        
        ],
        'admin' => []    
    ]
];
$this->package('nawiat/' . $packageName, null, base_path() . '/Atayal/Modules/' . $packageName . '/Main');        
