<h2>Slack settings</h2>

<p>Create an Incoming WebHook in Slack, selecting which channel to post to. Copy WebHook Url to this slack integration.
    Looking something like:
    <code>https://hooks.slack.com/services/T..</code></p>

<div class="form-group">
    {!! Form::label('settings[webhook_url]', 'Webhook URL:') !!}
    {!! Form::text('settings[webhook_url]', null, ['class' => 'form-control', 'required']) !!}
</div>