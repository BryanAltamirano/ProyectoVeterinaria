@extends('layouts/main')

@section('titulo_pagina', 'Login de usuario')

@section('contenido')
<style>
    body {
        background: linear-gradient(135deg, #c2b7a8ff, #6caed7ff);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        background-color:color-mix(in srgb, #5facbfff 80%, #2b5c7bff 20%);
        backdrop-filter: blur(8px);
        padding: 25px;
        transition: all 0.3s ease-in-out;
    }

    </style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h2>Inicio de Sesión Veterinaria</h2>
                    <form action="{{ route('logear') }}" method="post">
                        @csrf
                        @method('post')

                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña">

                        <button class="btn btn-warning mt-4">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
