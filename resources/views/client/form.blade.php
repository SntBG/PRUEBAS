<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('client') }}
            {{ Form::text('client', $client->client, ['class' => 'form-control' . ($errors->has('client') ? ' is-invalid' : ''), 'placeholder' => 'Client']) }}
            {!! $errors->first('client', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>