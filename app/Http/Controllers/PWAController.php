<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelPWA\Services\LaucherIconService;
use LaravelPWA\Services\ManifestService;

class PWAController extends Controller
{
    public function manifestJson()
    {
        $output = (new ManifestService)->generate();
        return response()->json($output);
    }

    public function offline(){
        return view('laravelpwa::offline');
    }
}
