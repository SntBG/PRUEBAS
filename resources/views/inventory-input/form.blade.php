<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $inventoryInput->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suppliers_id') }}
            {{ Form::text('suppliers_id', $inventoryInput->suppliers_id, ['class' => 'form-control' . ($errors->has('suppliers_id') ? ' is-invalid' : ''), 'placeholder' => 'Suppliers Id']) }}
            {!! $errors->first('suppliers_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('persons_id') }}
            {{ Form::text('persons_id', $inventoryInput->persons_id, ['class' => 'form-control' . ($errors->has('persons_id') ? ' is-invalid' : ''), 'placeholder' => 'Persons Id']) }}
            {!! $errors->first('persons_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comments') }}
            {{ Form::text('comments', $inventoryInput->comments, ['class' => 'form-control' . ($errors->has('comments') ? ' is-invalid' : ''), 'placeholder' => 'Comments']) }}
            {!! $errors->first('comments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regionals_id') }}
            {{ Form::text('regionals_id', $inventoryInput->regionals_id, ['class' => 'form-control' . ($errors->has('regionals_id') ? ' is-invalid' : ''), 'placeholder' => 'Regionals Id']) }}
            {!! $errors->first('regionals_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>