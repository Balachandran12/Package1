<?php

namespace Simple\Hellow;

use Illuminate\Support\ServiceProvider;
use App\Http\Kernel;

class HellowServiceProvider extends ServiceProvider
{

    public function boot(Kernel $kernel){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
    
    public function register()
    {
    }

}