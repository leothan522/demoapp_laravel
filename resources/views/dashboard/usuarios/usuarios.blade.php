@extends('adminlte::page')

@section('plugins.Sweetalert2', true)
@section('plugins.Pace', true)

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@endsection

@section('content')
    @livewire('usuarios-component')
@endsection

@section('footer')
    @include('dashboard.footer')
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css">--}}
@endsection

@section('js')
    <script>

        function precionarBoton(id){
            Livewire.emit('verPermisos', id, 'parametros');
        }

        $("#from_rol").submit(function(e) {
            e.preventDefault();
            let nombre = document.getElementById("nuevo_rol");
            Livewire.emit('storeRol', nombre.value);
        });

        Livewire.on('postAdded', (postId, nombre) => {
            document.getElementById("nuevo_rol").value = null;
            //alert('A post was added with the id of: ' + postId);
            let boton = '<button type="button" class="btn btn-default btn-sm btn-block m-1" data-toggle="modal" data-target="#modal-lg-permisos" class="btn btn-info btn-sm" onclick="precionarBoton(' +  postId + ')">' +  nombre + ' </button>';
            $('#listar_roles').append(boton);
        });

        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    icon: 'info',
                    title: 'Generando Archivo'
                })
            });

        });

        console.log('Hi!');
    </script>
@endsection



