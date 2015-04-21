<?php
namespace Atayal\Core\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use \Route;

class HelperServiceProvider extends ServiceProvider {

    public function register()
    {
        require base_path('app/Atayal/Core/helpers.php');
    }

}
