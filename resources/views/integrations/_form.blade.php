<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

@include('integrations.type-'.$type)

{!! Form::submit($submitText, ['class' => 'btn btn-cta-primary']) !!}