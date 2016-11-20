<?php

namespace Tgm\Start;

use Laravel\Lumen\Application as App;

class Application extends App{

        /**
     * Create a new Lumen application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        parent::__construct($basePath = null);
    }
    
    public function tgm() {
        echo "ddddaaadd test success";
    }

}
