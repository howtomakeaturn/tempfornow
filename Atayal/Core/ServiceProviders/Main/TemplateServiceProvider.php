<?php
namespace Atayal\Core\ServiceProviders\Main;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        foreach($this->paths() as $path){
            $splits = explode('/', $path);

            $packageName = end($splits);

            $this->package('nawiat/' . $packageName, null, base_path() . '/Atayal/Modules/' . $packageName . '/Main');        
        }
    }

    public function register(){}
    
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Atayal/Modules/*'), 'is_dir');
        
        return $dirs;
    }

}
