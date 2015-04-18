<?php
namespace Atayal\Core\ServiceProviders\Admin;

use Illuminate\Support\ServiceProvider;
use \Route;
use \File;

class RouteServiceProvider extends ServiceProvider {

    public function register()
    {
        foreach($this->paths() as $path){
            if ( File::exists($path . '/routes.php') ){
                require $path . '/routes.php';
            } else {
                Route::group(array( 'prefix' => 'admin'), function() use ($path)
                {
                    $splits = explode('/', $path);

                    $packageName = $splits[count($splits)-2];

                    Route::controller(strtolower($packageName), 'Atayal\\Modules\\'  . $packageName . '\Admin\Controller');
                });
            }
        }
    }
        
    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Atayal/Modules/*/Admin'), 'is_dir');

        return $dirs;
    }

}
