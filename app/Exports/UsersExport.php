<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithTitle;

class UsersExport implements FromView, WithTitle, WithProperties, ShouldAutoSize
{
    private $busqueda;

    public function __construct($busqueda = null)
    {
        $this->busqueda = $busqueda;
    }

    public function view(): View
    {
        // TODO: Implement view() method.
        $users = User::buscar($this->busqueda)->orderBy('id', 'DESC')->get();
        return view('dashboard.export.usuarios_registrados')
            ->with('users', $users);
    }

    public function title(): string
    {
        // TODO: Implement title() method.
        return "Usuarios Registrados";
    }

    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [
            'creator'        => 'Sistema '. env('APP_NAME'),
            'lastModifiedBy' => Auth::user()->name,
            'title'          => 'Usuarios Registrados',
            'company'        => env('APP_NAME')
        ];
    }

}
