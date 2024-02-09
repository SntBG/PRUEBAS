@extends('layouts.app')

@section('template_title')
    Inventory Output
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventory Output') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventory-outputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Clients Id</th>
										<th>Persons Id</th>
										<th>Comments</th>
										<th>Regionals Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventoryOutputs as $inventoryOutput)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventoryOutput->date }}</td>
											<td>{{ $inventoryOutput->clients_id }}</td>
											<td>{{ $inventoryOutput->persons_id }}</td>
											<td>{{ $inventoryOutput->comments }}</td>
											<td>{{ $inventoryOutput->regionals_id }}</td>

                                            <td>
                                                <form action="{{ route('inventory-outputs.destroy',$inventoryOutput->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventory-outputs.show',$inventoryOutput->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventory-outputs.edit',$inventoryOutput->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $inventoryOutputs->links() !!}
            </div>
        </div>
    </div>
@endsection
