@extends('layouts.app')

@section('template_title')
    {{ $inventoryOutput->name ?? "{{ __('Show') Inventory Output" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventory Output</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventory-outputs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $inventoryOutput->date }}
                        </div>
                        <div class="form-group">
                            <strong>Clients Id:</strong>
                            {{ $inventoryOutput->clients_id }}
                        </div>
                        <div class="form-group">
                            <strong>Persons Id:</strong>
                            {{ $inventoryOutput->persons_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comments:</strong>
                            {{ $inventoryOutput->comments }}
                        </div>
                        <div class="form-group">
                            <strong>Regionals Id:</strong>
                            {{ $inventoryOutput->regionals_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
