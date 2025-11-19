@extends('layouts.main')

@section('contenido')

<style>
    .card-simple {
        max-width: 500px;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 20px;
    }

    .table th {
        background: #f8f9fa;
        font-weight: 600;
    }

    .btn-back {
        background: #343a40;
        color: #fff;
        border-radius: 8px;
        padding: 8px 15px;
        text-decoration: none;
    }

    .btn-back:hover {
        background: #212529;
    }
</style>

<div class="container mt-4">
    <h2 class="text-center fw-bold mb-4">Usuarios existentes</h2>

    <div class="row justify-content-center">
        <div class="card card-simple">
            <div class="card-body">

                <table class="table table-sm text-center mb-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('usuarios') }}" class="btn-back">
                    <i class="fa-solid fa-backward-step"></i> Regresar
                </a>

            </div>
        </div>
    </div>
</div>

@endsection
