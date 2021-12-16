@extends('layouts.principal')

@section('title','Evento') 
 

@section('content')

<div class="container">
    <h1 class=" ">Eventos populares</h1>


    <div class="row">  
        <h3 class="ciscolanding-header">Eventos</h3>  
                @if ($evento != null )
                @foreach ($evento as $even) 
                @if (date("Y-m-d") > $even->fecha)                 
                @else
                <div class="col-md-4" style="flex:1;">
                    <div class="card-container">
                        <h3 id="titulo">{{$even->nombre}}</h3>
                        <h6>{{$even->fecha}}</h6>
                        <p style=" max-width: 260px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{$even->descripcion}}</p>
                        <div class="buttons">
                            <a href="{{ route('principal.regevento',$even->id)}}" class="btn btn-primary btn-sm btn-course">Entrar</a>
                        </div>
                        <div class="skills">
                        </div>
                    </div> 
                </div>
                @endif
                @endforeach
                @else
                <h1>No existen eventos actualmente disponibles</h1>
                @endif 
    </div>

</div>

<style>

    #lateral {
        max-width: 260px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;}

    #titulo{
        width: 300px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }  

    @import url('https://fonts.googleapis.com/css?family=Montserrat');

    * {
        box-sizing: border-box;
    }

    body {


        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

        min-height: 100vh;
        margin: 0;
    }

    h3 {
        margin: 10px 0;
    }

    h6 {
        margin: 5px 0;
        text-transform: uppercase;
    }

    p {
        font-size: 14px;
        line-height: 21px;
    }

    .card-container {
        background-color: #d6e8e9;
        border-radius: 5px;
        box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.75);
        color: #1b1d25;
        padding-top: 30px;
        position: relative;
        width: 350px;
        max-width: 100%;
        text-align: center;
        margin-bottom: 30px;
    }

    .card-container .pro {
        color: #231E39;
        background-color: #FEBB0B;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        padding: 3px 7px;
        position: absolute;
        top: 30px;
        left: 30px;
    }

    .card-container .round {
        border: 1px solid #03BFCB;
        border-radius: 50%;
        padding: 7px;
    }

    button.primary {
        background-color: #03BFCB;
        border: 1px solid #03BFCB;
        border-radius: 3px;
        color: #231E39;
        font-family: Montserrat, sans-serif;
        font-weight: 500;
        padding: 10px 25px;
    }

    button.primary.ghost {
        background-color: transparent;
        color: #02899C;
    }

    .skills {
        background-color: #1F1A36;
        text-align: left;
        padding: 15px;
        margin-top: 30px;
    }

    .skills ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .skills ul li {
        border: 1px solid #2D2747;
        border-radius: 2px;
        display: inline-block;
        font-size: 12px;
        margin: 0 7px 7px 0;
        padding: 7px;
    }

</style>


@endsection