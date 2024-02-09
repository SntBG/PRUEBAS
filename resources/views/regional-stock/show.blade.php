@extends('layouts.app')

@section('template_title')
    {{ $regionalStock->name ?? "{{ __('Show') Regional Stock" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Regional Stock</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('regional-stocks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Products Id:</strong>
                            {{ $regionalStock->products_id }}
                        </div>
                        <div class="form-group">
                            <strong>Intputs:</strong>
                            {{ $regionalStock->intputs }}
                        </div>
                        <div class="form-group">
                            <strong>Outputs:</strong>
                            {{ $regionalStock->outputs }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $regionalStock->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Regionals Id:</strong>
                            {{ $regionalStock->regionals_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
