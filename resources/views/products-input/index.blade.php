@extends('layouts.app')

@section('template_title')
    Products Input
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Products Input') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('products-inputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Inventory Inputs Id</th>
										<th>Products Id</th>
										<th>Quantity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productsInputs as $productsInput)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productsInput->date }}</td>
											<td>{{ $productsInput->inventory_inputs_id }}</td>
											<td>{{ $productsInput->products_id }}</td>
											<td>{{ $productsInput->quantity }}</td>

                                            <td>
                                                <form action="{{ route('products-inputs.destroy',$productsInput->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products-inputs.show',$productsInput->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products-inputs.edit',$productsInput->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $productsInputs->links() !!}
            </div>
        </div>
    </div>
@endsection
