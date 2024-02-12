@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Inventario de Bogotá
                            </span>

                             <div class="float-right">
                                <a href="{{ route('regional-bogota.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
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
                                        <tr>
                                            <td>{{ $regionalStock->Product->id }}</td>
                                            <td>{{ $regionalStock->Product->Category->category }}</td>
											<td>{{ $regionalStock->Product->product }}</td>
                                            <td>{{ $regionalStock->Product->Supplier->supplier }}</td>
                                            <td>{{ $regionalStock->Product->PackagingType->type }}</td>
                                            <td>{{ $regionalStock->Product->minimum_stock }}</td>
											<td>{{ $regionalStock->intputs }}</td>
											<td>{{ $regionalStock->outputs }}</td>
											<td>{{ $regionalStock->stock }}</td>
                                            <td>{{ $regionalStock->Product->state }}</td>

                                            <td>
                                                <form action="{{ route('regional-bogota.destroy',$regionalStock->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning" href="{{ route('regional-bogota.edit',$regionalStock->id) }}" title="Editar"><i class="fa fa-fw fa-edit"></i></a>
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
