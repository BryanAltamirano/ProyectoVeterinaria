@extends('layouts.main')

@section('contenido')


<div class="container mt-4">
    <div class="row">
        <div class="col">

            <div class="card shadow-xl border-0 rounded-4"
                 style="backdrop-filter: blur(6px); background: rgba(255,255,255,0.85); border-left:5px solid #4e73df;">
                <div class="card-body">

                    <table class="table align-middle table-hover text-center rounded-4 overflow-hidden"
                           style="background: rgba(255,255,255,0.9);">
                        
                        <thead style="background: #4e73df; color:white;">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                <td class="fw-semibold text-primary">
                                    {{ $item->name }}
                                </td>

                                <td class="text-secondary">
                                    {{ $item->email }}
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center align-items-center gap-2">

                                        <label class="switch m-0">
                                            <input type="checkbox" class="toggle-estado"
                                                data-id="{{ $item->id }}"
                                                {{ $item->activo ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>

                                        <span class="badge px-3 py-2"
                                            style="font-size: 0.75rem; background: {{ $item->activo ? '#1cc88a' : '#e74a3b' }};">
                                            {{ $item->activo ? 'Activo' : 'Inactivo' }}
                                        </span>

                                    </div>
                                </td>

                                <td>
                                    <form action="{{ route('destroy',$item->id) }}" method="post" class="d-inline">
                                        @csrf 
                                        @method('DELETE')

                                        <a href="{{ route('show',$item->id) }}"
                                           class="btn btn-info btn-sm text-white">
                                            Mostrar
                                        </a>

                                        <a href="{{ route('edit',$item->id) }}"
                                           class="btn btn-warning btn-sm text-dark">
                                            Editar
                                        </a>
                                    </form>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="5" class="text-muted p-4">
                                    No hay datos en la tabla
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>

                    <div class="d-flex justify-content-end">
                        {{ $items->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
