@extends('adminlte::page')

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate(Request::url()); !!}
        <p>Escanéame para volver a la página principal.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @livewire('firebase-component')
        </div>
    </div>
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

