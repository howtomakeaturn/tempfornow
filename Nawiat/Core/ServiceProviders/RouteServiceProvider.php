<?php
namespace Nawiat\Core\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    public function register()
    {
        foreach($this->paths() as $path){
            require $path . '/routes.php';
        }
    }
        
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Nawiat/Modules/*'), 'is_dir');
        
        return $dirs;
    }

}
