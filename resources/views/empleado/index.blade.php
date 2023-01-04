
@extends('layouts.app')
@section('content')

<div class="container">

    <div class="alert alert-success alert-dismissible" role="alert">
        
        @if(Session::has('mensaje'))
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                {{Session::get('mensaje')}}
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
        @endif
    
 




<a href="{{url('empleado/create')}}" class="btn btn-success" >Registrar nuevo empleado</a>
<br>
<table class="table table-ligth">
    
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidp Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>                
                <td>                
                 <img src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" class="img-thunbail img-fluid"alt="">
                </td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit/')}}" class="btn btn-warning">Editar</a>
                    
                    <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
                
            </tr>
        @endforeach
        
    </tbody>
    <tfoot>
        <tr>
            <th>Fin del listado</th>
        </tr>
    </tfoot>
</table>
{!!$empleados->links()!!}
</div>
@endsection
