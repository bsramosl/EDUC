@extends('layouts.plantillabase')

@section('title','Usuarios')

@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('css')
 
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection


@section('content')

<div class="card-body">
    <div id=" " class=" ">
        <table id="tabla" class="table table-striped table-bordered">
            <thead>
            <tr> 
                <th><i class="fa "></i> Nombre</th>
                <th><i class="fa "></i> Email</th>   
                <th><i class="fa "></i> Rol</th>   
                <th><i class="fa "></i> Opciones</th>    
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td> 
                    <td>{{$user->role}}</td>               

                        <td><a type="button" class="btn btn-primary btn-xs" href="{{route('usuario.editar',$user->id )}}"><i class="fa fa-pencil"></i></a>
                            <form action="{{route('usuario.delete',$user->id)}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Borrar el registro?');"><i class="fa fa-trash-o"></i></button> 
                        </form>                        
                        </td>                     
                </tr>            
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}

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