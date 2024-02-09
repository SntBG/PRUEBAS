@extends('layouts.app')

@section('template_title')
    Inventory Input
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventory Input') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventory-inputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Suppliers Id</th>
										<th>Persons Id</th>
										<th>Comments</th>
										<th>Regionals Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventoryInputs as $inventoryInput)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventoryInput->date }}</td>
											<td>{{ $inventoryInput->suppliers_id }}</td>
											<td>{{ $inventoryInput->persons_id }}</td>
											<td>{{ $inventoryInput->comments }}</td>
											<td>{{ $inventoryInput->regionals_id }}</td>

                                            <td>
                                                <form action="{{ route('inventory-inputs.destroy',$inventoryInput->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventory-inputs.show',$inventoryInput->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventory-inputs.edit',$inventoryInput->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $inventoryInputs->links() !!}
            </div>
        </div>
    </div>
@endsection
