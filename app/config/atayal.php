<?php
return [
    'modules' => [
        /*
         * These modules are actually just laravel packages.
         * If you have created your own modules, just add them here.
         * Atayal's Core will load your packages automatically.
         */    
        'main' => [
            ['atayal/frame', 'Frame', base_path().'/Atayal/Modules/Frame/Main'],
            ['atayal/page', 'Page', base_path().'/Atayal/Modules/Page/Main'],
            ['atayal/blog', 'Blog', base_path().'/Atayal/Modules/Blog/Main'],        
            ['atayal/contact', 'Contact', base_path().'/Atayal/Modules/Contact/Main'],        
        ],
        /*
         * Admin panels are laravel packages, too.
         * If you wish Atayal load your modules (admin panels),
         * add them here.
         */
        'admin' => [
            ['atayal/frame-admin', 'Frame/Admin', base_path().'/Atayal/Modules/Frame/Admin'],
            ['atayal/page-admin', 'Page/Admin', base_path().'/Atayal/Modules/Page/Admin'],
            ['atayal/blog-admin', 'Blog/Admin', base_path().'/Atayal/Modules/Blog/Admin'],        
        ]
    ]
];
