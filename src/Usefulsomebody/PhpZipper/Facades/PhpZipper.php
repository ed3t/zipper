<?php

namespace Usefulsomebody\PhpZipper\Facades;

use Illuminate\Support\Facades\Facade;

class PhpZipper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpzipper';
    }
}
