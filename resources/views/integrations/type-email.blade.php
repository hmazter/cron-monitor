<h2>Email settings</h2>

<div class="form-group">
    {!! Form::label('settings[email]', 'Email address to receive the notification:') !!}
    {!! Form::text('settings[email]', null, ['class' => 'form-control', 'required']) !!}
</div>