<?php
/**
 * Created by PhpStorm.
 * User: mohamedsabil83
 * Date: 13/09/16
 * Time: 01:28 ص
 */

namespace Mohamedsabil83\Hijri\Facades;

use Illuminate\Support\Facades\Facade;

class HijriFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hijri';
    }
}
