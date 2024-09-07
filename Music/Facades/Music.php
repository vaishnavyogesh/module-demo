<?php namespace Modules\Music\Facades;

use Illuminate\Support\Facades\Facade;

class Music extends Facade {
    protected static function getFacadeAccessor() {
        return 'music';
    }
}
