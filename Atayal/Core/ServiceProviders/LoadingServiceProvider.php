<?php
namespace Atayal\Core\ServiceProviders\Main;

use Illuminate\Support\ServiceProvider;
use \File;
use \App;

class LoadingServiceProvider extends ServiceProvider {

    public function register()
    {
        foreach($this->paths() as $path){
            $splits = explode('/', $path);

            $packageName = $splits[count($splits)-2];
            
      #      dd($packageName);

#            if (File::exists($path . '/ServiceProvider.php')){
                $class = 'Atayal\\Modules\\' . $packageName . '\\ServiceProvider';
                if (class_exists($class)){
                    App::register( $class );
                    
                }
   #         }
        }
    }

    protected function paths()
    {
        $dirs = array_filter(glob(base_path() . '/Atayal/Modules/*/Main'), 'is_dir');

        return $dirs;
    }

}
