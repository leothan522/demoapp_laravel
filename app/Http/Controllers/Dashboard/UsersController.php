<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function index()
    {
        return view('dashboard.usuarios.usuarios');
    }

    public function export($busqueda = null)
    {
        return Excel::download(new UsersExport($busqueda), "Usuarios_Registrados_".date('d-m-Y').".xlsx");
    }

}
