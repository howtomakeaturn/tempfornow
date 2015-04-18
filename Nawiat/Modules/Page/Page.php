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
        $dirs = array_filter(glob(base_path() . '/Nawiat/Modules/Page/Main/storage/*'), 'is_dir');

        $pages = [];

        foreach($dirs as $dir){
            $splits = explode('/', $dir);

            $page = end($splits);

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
