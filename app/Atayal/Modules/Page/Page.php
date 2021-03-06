<?php namespace Atayal\Modules\Page;

use \File;

class Page
{
    public $id;
    
    public $config;
    
    public $content;
    
    public function save()
    {
        File::put( app_path('Atayal/Modules/Page/Main/storage/' . $this->id . '.html'), $this->content );
        
        write_ini_file( $this->config, app_path('Atayal/Modules/Page/Main/storage/' . $this->id . '.ini') );
    }
    
    public function delete()
    {
        File::delete( app_path('Atayal/Modules/Page/Main/storage/' . $this->id . '.html') );

        File::delete( app_path('Atayal/Modules/Page/Main/storage/' . $this->id . '.ini') );
    }
    
}
