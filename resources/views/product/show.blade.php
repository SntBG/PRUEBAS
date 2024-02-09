@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $product->categories_id }}
                        </div>
                        <div class="form-group">
                            <strong>Product:</strong>
                            {{ $product->product }}
                        </div>
                        <div class="form-group">
                            <strong>Suppliers Id:</strong>
                            {{ $product->suppliers_id }}
                        </div>
                        <div class="form-group">
                            <strong>Packaging Types Id:</strong>
                            {{ $product->packaging_types_id }}
                        </div>
                        <div class="form-group">
                            <strong>Minimum Stock:</strong>
                            {{ $product->minimum_stock }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $product->state }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
