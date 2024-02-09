@extends('layouts.app')

@section('template_title')
    {{ $inventoryInput->name ?? "{{ __('Show') Inventory Input" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventory Input</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventory-inputs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $inventoryInput->date }}
                        </div>
                        <div class="form-group">
                            <strong>Suppliers Id:</strong>
                            {{ $inventoryInput->suppliers_id }}
                        </div>
                        <div class="form-group">
                            <strong>Persons Id:</strong>
                            {{ $inventoryInput->persons_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comments:</strong>
                            {{ $inventoryInput->comments }}
                        </div>
                        <div class="form-group">
                            <strong>Regionals Id:</strong>
                            {{ $inventoryInput->regionals_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
