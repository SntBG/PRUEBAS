@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div>
                        <h1 class="text-center">Inventario Regional Bogotá</h1>                             
                        <div class="my-4">
                            <a href="" class="btn btn-secondary"><i class="fa fa-fw fa-arrow-left"></i> Volver</a>
                            <a href="{{ route('regional-bogota.create') }}" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Agregar</a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Categoria</th>
                                        <th>Articulo</th>
                                        <th>Proveedor</th>
                                        <th>Embalaje</th>
                                        <th>Stock Minimo</th>
                                        <th>Entradas</th>
                                        <th>Salidas</th>
                                        <th>Stock Actual</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regionalStocks as $regionalStock)
                                        <tr >
                                            <td>{{ $regionalStock->Product->id }}</td>
                                            <td>{{ $regionalStock->Product->Category->category }}</td>
											<td>{{ $regionalStock->Product->product }}</td>
                                            <td>{{ $regionalStock->Product->Supplier->supplier }}</td>
                                            <td>{{ $regionalStock->Product->PackagingType->type }}</td>
                                            <td>{{ $regionalStock->Product->minimum_stock }}</td>
											<td>{{ $regionalStock->intputs }}</td>
											<td>{{ $regionalStock->outputs }}</td>
											<td>{{ $regionalStock->stock }}</td>
                                            <td>
                                                @switch($regionalStock->Product->state)
                                                    @case("Altas")
                                                        <span class="btn btn-success">Existencias Altas</span>
                                                        @break

                                                    @case("Bajas")
                                                        <span class="btn btn-warning">Existencias Bajas</span>
                                                        @break
                                                    @case("Cero")
                                                        <span class="btn btn-danger">Sin Existencias</span>
                                                        @break
                                                @endswitch
                                            </td>

                                            <td>
                                                <form action="{{ route('regional-bogota.destroy',$regionalStock->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('regional-bogota.edit',$regionalStock->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
