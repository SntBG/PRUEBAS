@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Regional Stock
@endsection

@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div>
                    <div>
                        <h1 class="text-center">Agreagar al inventario de Bogotá</h1>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('regional-bogota.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <div>
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        {{ Form::label('Articulo') }}
                                        {{ Form::select('products_id', $products, $regionalStock->products_id, ['class' => 'form-control form-select', 'placeholder' => 'Seleccione un articulo', 'required']) }}
                                        {!! $errors->first('products_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Entradas') }}
                                        {{ Form::text('intputs', $regionalStock->intputs, ['class' => 'form-control', 'placeholder' => 'Número de entradas', 'required']) }}
                                        {!! $errors->first('intputs', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Salidas') }}
                                        {{ Form::text('outputs', $regionalStock->outputs, ['class' => 'form-control', 'placeholder' => 'Número de salidas', 'required']) }}
                                        {!! $errors->first('outputs', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Stock') }}
                                        {{ Form::text('stock', $regionalStock->stock, ['class' => 'form-control', 'placeholder' => 'Número de existencias', 'required']) }}
                                        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group" style="display: none">
                                        {{ Form::text('regional', 'BOGOTA', ['class' => 'form-control']) }}
                                        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="mt-4">
                                    <a type="button" class="btn btn-secondary" href="{{route('regional-bogota.index')}}"><i class="fa fa-fw fa-arrow-left"></i> Volver</a>
                                    <button type="submit" class="btn btn-primary">Guardar  <i class="fa fa-floppy-disk"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
