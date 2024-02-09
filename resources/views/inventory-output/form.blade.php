<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $inventoryOutput->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clients_id') }}
            {{ Form::text('clients_id', $inventoryOutput->clients_id, ['class' => 'form-control' . ($errors->has('clients_id') ? ' is-invalid' : ''), 'placeholder' => 'Clients Id']) }}
            {!! $errors->first('clients_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('persons_id') }}
            {{ Form::text('persons_id', $inventoryOutput->persons_id, ['class' => 'form-control' . ($errors->has('persons_id') ? ' is-invalid' : ''), 'placeholder' => 'Persons Id']) }}
            {!! $errors->first('persons_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comments') }}
            {{ Form::text('comments', $inventoryOutput->comments, ['class' => 'form-control' . ($errors->has('comments') ? ' is-invalid' : ''), 'placeholder' => 'Comments']) }}
            {!! $errors->first('comments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regionals_id') }}
            {{ Form::text('regionals_id', $inventoryOutput->regionals_id, ['class' => 'form-control' . ($errors->has('regionals_id') ? ' is-invalid' : ''), 'placeholder' => 'Regionals Id']) }}
            {!! $errors->first('regionals_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>