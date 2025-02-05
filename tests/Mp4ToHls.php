<?php

namespace Lambq\LaravelFfmpeg\Tests;

use Lambq\LaravelFfmpeg\Facades\FFMpeg;

class Mp4ToHls
{
    public function index()
    {
        FFMpeg::fromDisk('public')->open($inputPath)->exportForHLS()->toDisk('public')->addFormat($format)->save($outputPath);
    }
}