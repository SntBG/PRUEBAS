<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $productsOutput->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventory_outputs_id') }}
            {{ Form::text('inventory_outputs_id', $productsOutput->inventory_outputs_id, ['class' => 'form-control' . ($errors->has('inventory_outputs_id') ? ' is-invalid' : ''), 'placeholder' => 'Inventory Outputs Id']) }}
            {!! $errors->first('inventory_outputs_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('products_id') }}
            {{ Form::text('products_id', $productsOutput->products_id, ['class' => 'form-control' . ($errors->has('products_id') ? ' is-invalid' : ''), 'placeholder' => 'Products Id']) }}
            {!! $errors->first('products_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $productsOutput->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>