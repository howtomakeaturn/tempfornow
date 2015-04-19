<?php namespace Atayal\Modules\Page;

use \File;

class Manager
{
    
    public static function templates()
    {
        $templateFullPaths = array_filter(glob(base_path() . '/Atayal/Modules/Page/Main/views/*'), 'is_file');
        
        $templates = [];
        
        foreach($templateFullPaths as $path){
            $splits = explode('/', $path);
            
            $template = end($splits);
            
            $templates[] = explode('.', $template)[0];
        }
        
        return $templates;
    }

    public static function categories()
    {
        $pages = self::all();
        
        $categories = [];
        
        foreach($pages as $page){
            if ( !in_array($page->config['category'], $categories) ){
                $categories[] = $page->config['category'];
            }
        }
        
        return $categories;
    }
    
    public static function getAllByCategory($category)
    {
        $pages = self::all();
        
        $result = [];
        
        foreach($pages as $page){
            if ( $page->config['category'] === $category ){
                $result[] = $page;
            }
        }
        
        return $result;        
    }
    
    public static function create($id, $config, $content)
    {
        $page = new self();
        
        $page->id = $id;
        
        $page->config = $config;
        
        $page->content = $content;
                
        return $page;
    }
    
    public static function get($pageId)
    {
        $instance = new Page();

        $config = parse_ini_file( base_path('Atayal/Modules/Page/Main/storage/' . $pageId . '.ini') );

        $content = File::get( base_path('Atayal/Modules/Page/Main/storage/' . $pageId . '.html') );

        $instance->id = $pageId;

        $instance->config = $config;
        
        $instance->content = $content;
        
        return $instance;
    }
    
    public static function all()
    {
        $paths = array_filter(glob(base_path() . '/Atayal/Modules/Page/Main/storage/*.html'), 'is_file');

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
        
}
