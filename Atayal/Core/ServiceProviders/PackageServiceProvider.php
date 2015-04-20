<?php
namespace Atayal\Core\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use \Config;
class PackageServiceProvider extends ServiceProvider {
    
    public function register(){}
    
    public function boot()
    {
        $modules = array_merge(Config::get('atayal.modules.main'), Config::get('atayal.modules.admin'));
        
        foreach( $modules as $module ){
            $this->package($module[0], $module[1], $module[2]);                    
        }
    }
    
}
