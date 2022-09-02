<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class ParametrosController extends Controller
{
    public function index()
    {
        return view('dashboard.parametros.parametros');
    }
}
