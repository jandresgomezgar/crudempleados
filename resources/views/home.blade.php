@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif



                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#agregar" role="tab">Profile</a>
                    </li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane fade in active" id="home" role="tabpanel">
                    <table class="table table-bordered" id="empleados">
                      <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellidos</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Salario</th>
                            <th class="text-center">Depa..</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $empleado)
                        <tr>
                            <td class="text-center">{{ $empleado->id }}</td>
                            <td class="text-center">{{ $empleado->nombre }}</td>
                            <td class="text-center">{{ $empleado->apellidos }}</td>
                            <td class="text-center">{{ $empleado->emailempleado }}</td>
                            <td class="text-center">{{ $empleado->telefono }}</td>
                            <td class="text-center">{{ $empleado->salario }}</td>
                            <td class="text-center">{{ $empleado->departamento }}</td>
                            <td>
                <form action="empleados/{{ $empleado->id }}" method="DELETE">
            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </td>
        </form>

        

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


            <div class="tab-pane fade" id="agregar" role="tabpanel">
                <form action="empleados" method="POST">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="nombre" id="nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Apellidos</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="apellidos" id="apellidos">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Email</label>
                         <div class="col-10">
                            <input class="form-control" type="text" name="emailempleado" id="emailempleado">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Telefono</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" name="telefono" id="telefono">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Salario</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="salario" id="salario">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Departamento</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="departamento" id="departamento">
                        </div>
                    </div>


                <input type="submit" class="btn btn-success" value="Enviar">
            </form>

        </div>

    </div>

</div>
</div>
</div>
</div>
</div>
@endsection
