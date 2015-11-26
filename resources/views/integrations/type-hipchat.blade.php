<h2>Hipchat settings</h2>

<p>Create an Integration of type "Build your own integration" in Hipchat for the desired channel,
    selecting a appropriate name. Copy the posting URL to this integration.
    Looking something like: <code>http://[organisation].hipchat.com/v2/room/...</code></p>

<div class="form-group">
    {!! Form::label('settings[webhook_url]', 'Webhook URL:') !!}
    {!! Form::text('settings[webhook_url]', null, ['class' => 'form-control']) !!}
</div>