@extends('layouts.plantillabase')

@section('title','Evento')

@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('css')
 
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="card-body">
    <div id=" " class="  dt- ">
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
            <tr> 
                <th><i class="fa "></i> Nombre</th>
                <th><i class="fa "></i> Descripcion</th>   
                <th><i class="fa "></i> Fecha</th>   
                <th><i class="fa "></i> Costo</th>    
                <th><i class="fa "></i> Opciones</th>    

            </tr>
            </thead>
            <tbody>
                @foreach ($evento as $even)
                <tr>
                    <td>{{$even->nombre}}</td>
                    <td>{{$even->descripcion}}</td>
                    <td>{{$even->fecha}}</td>   
                    <td>{{$even->costo}}</td>                      

                        <td><a type="button" class="btn btn-primary btn-xs" href="{{route('evento.editar',$even->id )}}"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('evento.delete',$even->id)}}" method="POST">
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
