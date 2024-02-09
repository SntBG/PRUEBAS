<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categories_id') }}
            {{ Form::select('categories_id', $categories, $product->categories_id, ['class' => 'form-control' . ($errors->has('categories_id') ? ' is-invalid' : ''), 'placeholder' => 'Categories Id']) }}
            {!! $errors->first('categories_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product') }}
            {{ Form::text('product', $product->product, ['class' => 'form-control' . ($errors->has('product') ? ' is-invalid' : ''), 'placeholder' => 'Product']) }}
            {!! $errors->first('product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suppliers_id') }}
            {{ Form::select('suppliers_id', $suppliers, $product->suppliers_id, ['class' => 'form-control' . ($errors->has('suppliers_id') ? ' is-invalid' : ''), 'placeholder' => 'Suppliers Id']) }}
            {!! $errors->first('suppliers_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('packaging_types_id') }}
            {{ Form::select('packaging_types_id', $packaging, $product->packaging_types_id, ['class' => 'form-control' . ($errors->has('packaging_types_id') ? ' is-invalid' : ''), 'placeholder' => 'Packaging Types Id']) }}
            {!! $errors->first('packaging_types_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('minimum_stock') }}
            {{ Form::text('minimum_stock', $product->minimum_stock, ['class' => 'form-control' . ($errors->has('minimum_stock') ? ' is-invalid' : ''), 'placeholder' => 'Minimum Stock']) }}
            {!! $errors->first('minimum_stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display: none;">
            {{ Form::text('state', $product->state, ['class' => 'form-control','value' => '']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>