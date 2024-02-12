<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('products') }}
            {{ Form::select('products_id', $products, $regionalStock->products_id, ['class' => 'form-control' . ($errors->has('products_id') ? ' is-invalid' : ''), 'placeholder' => 'Products Id']) }}
            {!! $errors->first('products_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intputs') }}
            {{ Form::text('intputs', $regionalStock->intputs, ['class' => 'form-control' . ($errors->has('intputs') ? ' is-invalid' : ''), 'placeholder' => 'Intputs']) }}
            {!! $errors->first('intputs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('outputs') }}
            {{ Form::text('outputs', $regionalStock->outputs, ['class' => 'form-control' . ($errors->has('outputs') ? ' is-invalid' : ''), 'placeholder' => 'Outputs']) }}
            {!! $errors->first('outputs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $regionalStock->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regional') }}
            {{ Form::text('regional', $regionalStock->regional, ['class' => 'form-control', 'placeholder' => 'Regionals Id']) }}
            {!! $errors->first('regionals_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>