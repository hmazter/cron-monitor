<h2>SMS settings</h2>

<div class="form-group">
    {!! Form::label('settings[country]', 'Country:') !!}
    {!! Form::select('settings[country]', ['SE' => 'Sweden'] , null , ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('settings[recipient]', 'Recipient number:') !!}
    {!! Form::text('settings[recipient]', null, ['class' => 'form-control', 'required']) !!}
</div>