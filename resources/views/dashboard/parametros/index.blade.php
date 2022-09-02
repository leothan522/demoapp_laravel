<div class="row justify-content-center" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="col-md-3">

        <div class="card card-gray-dark" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
            <div class="card-header">
                <h3 class="card-title">
                    @if($view == "create")
                        Crear Parametro
                        @else
                        Editar Parametro
                    @endif
                </h3>
                <div class="card-tools">
                    <span class="btn btn-tool" wire:click="limpiar"><i class="fas fa-list"></i></span>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @include('dashboard.parametros.form')
            </div>
            <!-- /.card-body -->

            <div class="overlay-wrapper" wire:loading>
                <div class="overlay">
                    <i class="fas fa-2x fa-sync-alt"></i>
                </div>
            </div>

        </div>

        @include('dashboard.parametros.campos')

    </div>

    <div class="col-md-9">

        <div class="card card-outline card-purple" style="height: inherit; width: inherit; transition: all 0.15s ease 0s;">
            <div class="card-header">
                <h3 class="card-title">
                    @if($busqueda)
                        Resultados de la Busqueda { <b class="text-danger">{{ $busqueda }} </b>}
                    @else
                        Parametros Registrados
                    @endif
                </h3>
                <div class="card-tools">
                    @if($busqueda)
                        <a href="{{ route('parametros.index') }}"
                           class="btn btn-tool btn-outline-primary text-danger" {{--target="_blank"--}}>
                            <i class="fas fa-list"></i> Ver Todos
                        </a>
                    @endif
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                @include('dashboard.parametros.table')

            </div>
            <!-- /.card-body -->
        </div>

    </div>

</div>
