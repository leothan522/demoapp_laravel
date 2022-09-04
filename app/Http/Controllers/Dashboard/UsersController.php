<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function createPDF()
    {
        $users = User::all();

        $data = [
            'users' => $users,
        ];

        $pdf = Pdf::loadView('dashboard.export.usuarios_registrados', $data);
        return $pdf->download('Usuarios.pdf');
    }

}
