@extends('layouts.app')

@section('template_title')
    {{ $productsOutput->name ?? "{{ __('Show') Products Output" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Products Output</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products-outputs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $productsOutput->date }}
                        </div>
                        <div class="form-group">
                            <strong>Inventory Outputs Id:</strong>
                            {{ $productsOutput->inventory_outputs_id }}
                        </div>
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $productsOutput->products_id }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $productsOutput->quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
