@extends('layouts.plantillabase')

@section('title','Cursos')

@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('css')
 
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="card-body">
    <div id=" " class="   ">
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
            <tr> 
                <th><i class="fa "></i> Nombre</th>
                <th><i class="fa "></i> Descripcion</th>   
                <th><i class="fa "></i> Longitud</th>
                <th><i class="fa "></i> Nivel</th>
                <th><i class="fa "></i> Link</th>
                <th><i class="fa "></i> Fecha</th>   
                <th><i class="fa "></i> Costo</th>  
                <th><i class="fa "></i> Opciones</th>     
            </tr>
            </thead>
            <tbody>
                @foreach ($curso as $cur)
                <tr>
                    <td>{{$cur->nombre}}</td>
                    <td>{{$cur->descripcion}}</td>
                    <td>{{$cur->longitud}}</td>
                    <td>{{$cur->nivel}}</td>
                    <td>{{$cur->link}}</td>
                    <td>{{$cur->fecha}}</td>   
                    <td>{{$cur->costo}}</td>                      

                        <td><a type="button" class="btn btn-primary btn-xs" href="{{route('curso.editar',$cur->id )}}"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('curso.delete',$cur->id)}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Borrar el registro?');"><i class="fa fa-trash-o"></i></button> 
                        </form>                        
                        </td>                     
                </tr>            
                @endforeach
            </tbody>
        </table>
      

    </div>
</div> 
@endsection


@section('js')

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
$('#tabla').DataTable();
</script>
@endsection