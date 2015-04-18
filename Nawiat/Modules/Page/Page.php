<?php namespace Nawiat\Modules\Page;

use \File;

class Page
{
    public $id;
    
    public $config;
    
    public $content;
    
    public static function get($pageId)
    {
        $instance = new self();

        $config = parse_ini_file( base_path('Nawiat/Modules/Page/storage/' . $pageId . '/main.ini') );

        $content = File::get( base_path('Nawiat/Modules/Page/storage/' . $pageId . '/main.html') );

        $instance->id = $pageId;

        $instance->config = $config;
        
        $instance->content = $content;
        
        return $instance;
    }
    
    public function save()
    {
        File::put( base_path('Nawiat/Modules/Page/storage/' . $this->id . '/main.html'), $this->content );
        
        write_ini_file( $this->config, base_path('Nawiat/Modules/Page/storage/' . $this->id . '/main.ini') );
    }
    
}
