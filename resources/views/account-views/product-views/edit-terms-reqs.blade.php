@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Product Card -->
        <p>
        <div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto m-0 p-0">
                                <img style="width: 7rem" class=""
                                    src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
                                    <a href="{{ route('account.product.edit', ['product' => $Product]) }} " class="stretched-link"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg">
                        <h1 class="card-title">{{ $Product->title }}</h1>
                        <div class="d-flex justify-content-start">
                            @include('components.user-card')
                        </div>
                    </div>
                    <div class="col-auto m-0 p-0 d-flex align-items-end">
                        <div>
                            <div class="d-flex justify-content-end">
                                <!-- Botones a la Derecha -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </p>
        <!-- end Product Card -->
    </div>
    <!-- Content -->
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <form class="trySubmit" method="POST"
                    action="{{ route('account.term-req.store', ['Product' => $Product]) }}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg">
                                <h3>Requisitos, Terminos y Condiciones</h3>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-success mr-2" type="submit">Agregar</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-auto pr-0">
                                <select class="form-control" class="custom-select" name="group" required>
                                    <option value="">Select. Grupo</option>
                                    <option {{ old('group') == 'req_min' ? 'selected' : '' }} value="req_min">Req.
                                        Minimo
                                    </option>
                                    <option {{ old('group') == 'req_med' ? 'selected' : '' }} value="req_med">Req.
                                        Recomendado
                                    </option>
                                    <option {{ old('group') == 'term' ? 'selected' : '' }} value="term">Terminos y
                                        Condiciones
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg">
                                <input type="text" class="form-control @error('content') is-invalid @enderror"
                                    name="content" placeholder="Texto Descripcion" required>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            {{-- <div class="card-body"> --}}
            <div class="card-body">
                <p>
                    Requisitos Minimos
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <colgroup>
                            <col style="width: 1%;">
                            <col>
                            <col style="width: 20%;">
                            <col style="width: 15%;">
                        </colgroup>
                        <thead class="thead-ligth">
                            <tr>
                                <th>#</th>
                                <th>Descripcion</th>
                                <th>F. Registro</th>
                                <th class="d-flex justify-content-end">Controles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($Product->getAllMinReq()->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center bg-warning">
                                        No Content
                                    </td>
                                </tr>
                            @else
                                @foreach ($Product->getAllMinReq() as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <form class="dropReg" method="POST"
                                                    action="{{ route('account.term-req.destroy', ['Registro' => $item]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm mr-2">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- </div> --}}
        </div>
        </p>
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            {{-- <div class="card-body"> --}}
            <div class="card-body">
                <p>
                    Requisitos Recomendados
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <colgroup>
                            <col style="width: 1%;">
                            <col>
                            <col style="width: 20%;">
                            <col style="width: 15%;">
                        </colgroup>
                        <thead class="thead-ligth">
                            <tr>
                                <th>#</th>
                                <th>Descripcion</th>
                                <th>F. Registro</th>
                                <th class="d-flex justify-content-end">Controles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($Product->getAllMedReq()->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center bg-warning">
                                        No Content
                                    </td>
                                </tr>
                            @else
                                @foreach ($Product->getAllMedReq() as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <form class="dropReg" method="POST"
                                                    action="{{ route('account.term-req.destroy', ['Registro' => $item]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm mr-2">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- </div> --}}
        </div>
        </p>
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            {{-- <div class="card-body"> --}}
            <div class="card-body">
                <p>
                    Terminos y Condiciones
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <colgroup>
                            <col style="width: 1%;">
                            <col>
                            <col style="width: 20%;">
                            <col style="width: 15%;">
                        </colgroup>
                        <thead class="thead-ligth">
                            <tr>
                                <th>#</th>
                                <th>Descripcion</th>
                                <th>F. Registro</th>
                                <th class="d-flex justify-content-end">Controles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($Product->getAllTerms()->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center bg-warning">
                                        No Content
                                    </td>
                                </tr>
                            @else
                                @foreach ($Product->getAllTerms() as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <form class="dropReg" method="POST"
                                                    action="{{ route('account.term-req.destroy', ['Registro' => $item]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm mr-2">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- </div> --}}
        </div>
        </p>

    </div>
@endsection

@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Agregar Registro?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
        $('.dropReg').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Eliminar Registro?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
