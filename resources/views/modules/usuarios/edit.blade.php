@extends('layouts.main')

@section('contenido')

<style>
    .card-edit {
        max-width: 500px;
        border: none;
        border-radius: 18px;
        padding: 25px;
        background: #ffffff;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: 0.3s ease;
    }

    .card-edit:hover {
        box-shadow: 0 12px 35px rgba(0,0,0,0.12);
    }

    .title-min {
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #333;
    }

    label {
        font-weight: 600;
        margin-bottom: 4px;
        color: #444;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ccc;
        transition: 0.2s;
    }

    .form-control:focus {
        border-color: #6c63ff;
        box-shadow: 0 0 5px rgba(108, 99, 255, 0.4);
    }

    .btn-main {
        border-radius: 10px;
        padding: 8px 16px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .btn-update {
        background-color: #6c63ff;
        color: white;
        border: none;
    }

    .btn-update:hover {
        background-color: #7ec77aff;
    }

    .btn-cancel {
        background-color: #e74c3c;
        color: white;
        border: none;
    }

    .btn-cancel:hover {
        background-color: #c0392b;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4 title-min">Actualizar Información</h2>

    <div class="row justify-content-center">
        <div class="card card-edit">
            <div class="card-body">
                
                <form action="{{ route('update', $item->id) }}" method="post">
                    @csrf 
                    @method('PUT')

                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control mb-3" required
                           value="{{ $item->name }}">

                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" required
                           value="{{ $item->email }}">

                    <div class="d-flex gap-2 mt-3">
                        <button type="submit" class="btn btn-main btn-update">
                            <i class="fa-regular fa-pen-to-square"></i> Actualizar
                        </button>

                        <a href="{{ route('usuarios') }}" class="btn btn-main btn-cancel">
                            <i class="fa-solid fa-ban"></i> Cancelar
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
