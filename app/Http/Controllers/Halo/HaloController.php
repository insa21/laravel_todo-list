<?php

namespace App\Http\Controllers\Halo;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HaloController extends Controller
{
    public function index()
    {
        return '<h4>Hallo controller</h4>';
    }
}
