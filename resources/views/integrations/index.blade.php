@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <h1>Integrations</h1>

            @if(count($integrations) > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($integrations as $integration)
                        <tr>
                            <td>{{ ucfirst($integration->type) }}</td>
                            <td>{{ $integration->name }}</td>
                            <td>
                                <a href="{{ route('account.integrations.edit', $integration->id) }}"
                                   class="btn btn-link">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('account.integrations.destroy', $integration->id) }}"
                                      method="post"
                                      onsubmit="return confirm('Are you sure you want to delete this Integration?')">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-link">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p class="lead">No integrations defined yet</p>
            @endif

            <h2>Available Integrations</h2>

            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="/images/logo_mail.png" width="64" alt="Email">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Email</h4>

                    <p>Gummies chocolate bar sugar plum. Oat cake pastry pie. Bear claw dragée cotton candy dessert
                        tiramisu jujubes brownie jujubes. Marshmallow bonbon pudding dragée pudding cupcake sweet.
                        Lollipop macaroon icing biscuit jelly chocolate lemon drops. </p>
                </div>
                <div class="media-right">
                    <a href="{{ route('account.integrations.create') }}?type=email" class="btn btn-cta-primary">
                        Add integration
                    </a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="/images/logo_slack.jpg" width="64" alt="Slack logo">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Slack</h4>

                    <p>Create an Incoming WebHook in Slack, selecting which channel to post to.
                        Copy WebHook Url to this slack integration. Looking something like:
                        <code>https://hooks.slack.com/services/T..</code></p>

                    <p>Gummies chocolate bar sugar plum. Oat cake pastry pie. Bear claw dragée cotton candy dessert
                        tiramisu jujubes brownie jujubes. Marshmallow bonbon pudding dragée pudding cupcake sweet.
                        Lollipop macaroon icing biscuit jelly chocolate lemon drops. </p>
                </div>
                <div class="media-right">
                    <a href="{{ route('account.integrations.create') }}?type=slack" class="btn btn-cta-primary">
                        Add integration</a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="/images/logo_hipchat.png" width="64" alt="Hipchat logo">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Hipchat</h4>

                    <p>Create an Integration of type "Build your own integration" in Hipchat for the desired channel,
                        selecting a appropriate name. Copy the posting URL to this integration.
                        Looking something like: <code>http://[organisation].hipchat.com/v2/room/...</code></p>

                    <p>Gummies chocolate bar sugar plum. Oat cake pastry pie. Bear claw dragée cotton candy dessert
                        tiramisu jujubes brownie jujubes. Marshmallow bonbon pudding dragée pudding cupcake sweet.
                        Lollipop macaroon icing biscuit jelly chocolate lemon drops. </p>
                </div>
                <div class="media-right">
                    <a href="{{ route('account.integrations.create') }}?type=hipchat" class="btn btn-cta-primary">
                        Add integration</a>
                </div>
            </div>
        </div>
    </section>

@endsection