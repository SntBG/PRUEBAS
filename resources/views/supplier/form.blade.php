<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('supplier') }}
            {{ Form::text('supplier', $supplier->supplier, ['class' => 'form-control' . ($errors->has('supplier') ? ' is-invalid' : ''), 'placeholder' => 'Supplier']) }}
            {!! $errors->first('supplier', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>