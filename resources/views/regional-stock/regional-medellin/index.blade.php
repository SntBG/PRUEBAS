@extends('layouts.app')

@section('template_title')
    Regional Stock
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Regional Stock') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('regional-medellin.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Products Id</th>
										<th>Intputs</th>
										<th>Outputs</th>
										<th>Stock</th>
										<th>Regionals Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regionalStocks as $regionalStock)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $regionalStock->Product->product }}</td>
											<td>{{ $regionalStock->intputs }}</td>
											<td>{{ $regionalStock->outputs }}</td>
											<td>{{ $regionalStock->stock }}</td>
											<td>{{ $regionalStock->regional }}</td>

                                            <td>
                                                <form action="{{ route('regional-medellin.destroy',$regionalStock->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('regional-medellin.show',$regionalStock->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('regional-medellin.edit',$regionalStock->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $regionalStocks->links() !!}
            </div>
        </div>
    </div>
@endsection
