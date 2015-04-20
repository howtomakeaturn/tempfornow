<?php
namespace Atayal\Core\ServiceProviders\Main;

use Illuminate\Support\ServiceProvider;
use \Route;

class HelperServiceProvider extends ServiceProvider {

    public function register()
    {
        require base_path('Atayal/Core/helpers.php');
    }

}
