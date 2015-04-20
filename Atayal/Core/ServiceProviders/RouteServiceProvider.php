<?php
namespace Atayal\Core\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use \File;
use \Config;

class RouteServiceProvider extends ServiceProvider {

    public function register(){}

    public function boot()
    {
        $modules = array_merge(Config::get('atayal.modules.main'), Config::get('atayal.modules.admin'));

        foreach( $modules as $module ){
            $path = $module[2];

            if (File::exists($path . '/routes.php')){
                require $path . '/routes.php';
            }            
        }
    }

}
