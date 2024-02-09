@extends('layouts.app')

@section('template_title')
    {{ $productsInput->name ?? "{{ __('Show') Products Input" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Products Input</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products-inputs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $productsInput->date }}
                        </div>
                        <div class="form-group">
                            <strong>Inventory Inputs Id:</strong>
                            {{ $productsInput->inventory_inputs_id }}
                        </div>
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $productsInput->products_id }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $productsInput->quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
