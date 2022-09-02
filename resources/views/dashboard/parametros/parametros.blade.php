@extends('adminlte::page')

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)

@section('title', 'Parametros')

@section('content_header')
    <h1>Parametros</h1>
@endsection

@section('content')
    @livewire('parametros-component')
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

