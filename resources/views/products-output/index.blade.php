@extends('layouts.app')

@section('template_title')
    Products Output
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Products Output') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('products-outputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Date</th>
										<th>Inventory Outputs Id</th>
										<th>Products Id</th>
										<th>Quantity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productsOutputs as $productsOutput)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productsOutput->date }}</td>
											<td>{{ $productsOutput->inventory_outputs_id }}</td>
											<td>{{ $productsOutput->products_id }}</td>
											<td>{{ $productsOutput->quantity }}</td>

                                            <td>
                                                <form action="{{ route('products-outputs.destroy',$productsOutput->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products-outputs.show',$productsOutput->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products-outputs.edit',$productsOutput->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $productsOutputs->links() !!}
            </div>
        </div>
    </div>
@endsection
