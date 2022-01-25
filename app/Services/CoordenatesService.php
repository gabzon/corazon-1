<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CoordenatesService 
{
    public function __construct(string $address, string $zip, string $city, string $country)
    {
        // $this->;
    }

    public function getCoordernates()
    {
        Http::get();
    }
}
