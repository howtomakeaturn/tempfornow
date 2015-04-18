<?php
namespace Atayal\Core\ServiceProviders\Admin;

use Illuminate\Support\ServiceProvider;
use \Route;

class RouteServiceProvider extends ServiceProvider {

    public function register()
    {
        Route::group(array( 'prefix' => 'admin'), function()
        {
            foreach($this->paths() as $path){
                $splits = explode('/', $path);

                $packageName = $splits[count($splits)-2];

                Route::controller(strtolower($packageName), 'Atayal\\Modules\\'  . $packageName . '\Admin\Controller');
            }
        });
    }
        
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Atayal/Modules/*/Admin'), 'is_dir');

        return $dirs;
    }

}
