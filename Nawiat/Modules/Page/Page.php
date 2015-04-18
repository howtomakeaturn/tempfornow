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

        $config = parse_ini_file( base_path('Nawiat/Modules/Page/Main/storage/' . $pageId . '.ini') );

        $content = File::get( base_path('Nawiat/Modules/Page/Main/storage/' . $pageId . '.html') );

        $instance->id = $pageId;

        $instance->config = $config;
        
        $instance->content = $content;
        
        return $instance;
    }
    
    public static function all()
    {
        $paths = array_filter(glob(base_path() . '/Nawiat/Modules/Page/Main/storage/*.html'), 'is_file');

        $pages = [];

        foreach($paths as $path){
            $splits = explode('/', $path);

            $page = end($splits);
            
            $page = explode('.', $page)[0];

            $pages[] = $page;
        }

        $result = [];
        
        foreach($pages as $id){
            $result[] = self::get($id);
        }

        return $result;        
    }
    
    public function save()
    {
        File::put( base_path('Nawiat/Modules/Page/Main/storage/' . $this->id . '.html'), $this->content );
        
        write_ini_file( $this->config, base_path('Nawiat/Modules/Page/Main/storage/' . $this->id . '.ini') );
    }
    
}
