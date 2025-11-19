@extends('layouts.main')

@section('contenido')
    <div class="text-center mt-0">
        <h2 
            style="
                color: black;
                background: white;
                display: inline-block;
                padding: 4px 10px;
            ">
            Bienvenidos a la Veterinaria
        </h2>
    </div>
    <body style="
    background: url('{{ asset('img/OIP.jpg') }}') 
    no-repeat center center;
    background-size: 500px; 
    background-attachment: fixed;
"></body>
@endsection
