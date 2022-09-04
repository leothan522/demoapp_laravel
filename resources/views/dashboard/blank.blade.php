@extends('adminlte::page')

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)

@section('title', 'Dashboard')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Usuarios</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    <li class="breadcrumb-item active">Usuarios Registrados</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@endsection

@section('footer')
    @include('dashboard.footer')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css">--}}
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection

@section('right-sidebar')
    @include('dashboard.right-sidebar')
@endsection
