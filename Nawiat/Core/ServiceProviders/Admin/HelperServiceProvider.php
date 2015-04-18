<?php
namespace Nawiat\Core\ServiceProviders\Admin;

use Illuminate\Support\ServiceProvider;
use \Route;

class HelperServiceProvider extends ServiceProvider {

    public function register()
    {
        require base_path('Nawiat/Core/helpers.php');
    }

}
