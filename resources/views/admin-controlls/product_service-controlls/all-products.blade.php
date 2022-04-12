@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-4">
                    <div class="w-100 p-3">
                        <div class="d-flex justify-content-between">
                            <h4>Productos y Servicios</h4>
                            {{-- <a class="btn btn-success" href="">Nuevo Producto</a> --}}
                        </div>
                        <br>
                        @if ($products->isEmpty())
                            <div class="alert alert-warning">
                                <h1>Sin Productos en el sistema…</h1>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <colgroup>
                                        <col style="width: 1%;">
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col style="width: 15%;">

                                    </colgroup>
                                    <thead class="thead-ligth">
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Descripcion</th>
                                            <th>Tipo</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Visible</th>
                                            <th>Bloqueado</th>
                                            <th>Fecha de Registro</th>
                                            <th class="d-flex justify-content-end">Controles</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->type }}</td>
                                                <td>{{ $product->amount }}</td>
                                                <td>{{ $product->stock }}</td>
                                                @if ($product->visible == true)
                                                    <td>Visible</td>
                                                @else
                                                    <td>Oculto</td>
                                                @endif

                                                @if ($product->locked == true)
                                                    <td>Bloqueado</td>
                                                @else
                                                    <td>Desbloqueado</td>
                                                @endif
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-end">
                                                        <a class="btn btn-outline-primary btn-sm mr-2"
                                                            href="{{ route('public.products.view', ['product' => $product]) }}"
                                                            target="_blank">Ver Pagina</a>

                                                        {{-- <a class="btn btn-outline-success btn-sm mr-2"
                                                            href="">Actualizar</a> --}}

                                                        <form class="dropItem" method="POST"
                                                            action="{{ route('admin.products.delete', ['product' => $product]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-outline-danger btn-sm mr-2">Eliminar</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @if (session('deleted') == 'ok')
        <script>
            Swal.fire(
                'Deleted!',
                'Item deleted.',
                'success'
            )
        </script>
    @endif

    @if (session('created') == 'ok')
        <script>
            Swal.fire(
                'Creaded!',
                'Item Created.',
                'success'
            )
        </script>
    @endif

    @if (session('update') == 'ok')
        <script>
            Swal.fire(
                'Updated!',
                'Item Updated.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.dropItem').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire('Falta crear Ruta')
                    this.submit();
                }
            })
        });
    </script>
@endsection
