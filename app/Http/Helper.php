<?php

namespace App\Http;

use Oneduo\NovaFileManager\Support\Asset;

class Helper
{
    // Asset to URL

    public static function assetToURL(?Asset $asset)
    {
        if (! $asset) {
        return null;
        }

        return "/storage/$asset->path";
    }
}
