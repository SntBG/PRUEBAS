@extends('layouts.app')

@section('template_title')
    {{ $supplier->name ?? "{{ __('Show') Supplier" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Supplier</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Supplier:</strong>
                            {{ $supplier->supplier }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection