<?php

namespace Lambq\LaravelFfmpeg;

use Illuminate\Support\Facades\Facade;

class FFMpegFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ffmpeg';
    }
}
