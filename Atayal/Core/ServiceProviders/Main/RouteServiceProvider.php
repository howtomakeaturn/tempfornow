<?php
namespace Atayal\Core\ServiceProviders\Main;

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
        $dirs = array_filter(glob(base_path() . '/Atayal/Modules/*/Main'), 'is_dir');

        return $dirs;
    }

}
