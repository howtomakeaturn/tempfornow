<?php
namespace Nawiat\Core\ServiceProviders\Admin;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        foreach($this->paths() as $path){
            $splits = explode('/', $path);

            $packageName = $splits[count($splits)-2];

            $this->package('nawiat/' . $packageName, 'Admin/' . $packageName, base_path() . '/Nawiat/Modules/' . $packageName . '/Admin');        
        }
    }

    public function register(){}
    
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Nawiat/Modules/*/Admin'), 'is_dir');
        
        return $dirs;
    }

}
