@extends('layouts.plantillabase')

@section('title','Pago Evento')

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
                <th><i class="fa "></i> Usuario</th>
                <th><i class="fa "></i> Evento</th>   
                <th><i class="fa "></i> Fecha</th>   
                <th><i class="fa "></i> Pago</th>   
                <th><i class="fa "></i> Opciones</th>  
            </tr>
            </thead>
            <tbody>
                @foreach ($pago as $pag)
                <tr>
                    <td>{{$pag->user->name}}</td>
                    <td>{{$pag->evento->nombre}}</td>
                    <td>{{$pag->fecha}}</td>  
                    <td>{{$pag->pago}}</td>                      

                        <td><!--<a type="button" class="btn btn-primary btn-xs" href="{{route('pago.editar',$pag->id )}}"><i class="fa fa-pencil"></i></a>-->
                            <form action="{{route('pagoevento.delete',$pag->id)}}" method="POST">
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
