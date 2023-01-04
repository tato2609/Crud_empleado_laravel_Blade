<h1>{{$modo}}empleado</h1>
@if(count($errors)>0)
<div clsas="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-group">
    <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
        
        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
        
        <label for="ApellidoMaterno">Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
       
        <label for="Correo">Correo</label>
        <input type="text" name="Correo" id="Correo" class="form-control" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
        
        <label for="Foto">Foto</label>
        @if(isset($empleado->Foto))
        <img src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
        @endif 
        <input type="file" class="form-control" name="Foto"  id="Foto">
        <br>
        <input type="submit" class="form-control" class="btn btn-succes" value="{{$modo}} datos">
        <br>
        <a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>    
    </form>
</div>