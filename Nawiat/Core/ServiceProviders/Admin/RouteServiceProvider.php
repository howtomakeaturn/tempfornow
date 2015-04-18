<?php
namespace Nawiat\Core\ServiceProviders\Admin;

use Illuminate\Support\ServiceProvider;
use \Route;

class RouteServiceProvider extends ServiceProvider {

    public function register()
    {
        Route::group(array('namespace' => 'Nawiat\Admin', 'prefix' => 'admin'), function()
        {
            foreach($this->paths() as $path){
                $splits = explode('/', $path);

                $packageName = end($splits);                

                Route::controller(strtolower($packageName), $packageName . '\Controller');
            }
        });
    }
        
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Nawiat/Admin/*'), 'is_dir');
        
        return $dirs;
    }

}
