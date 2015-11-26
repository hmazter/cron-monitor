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
                                <a href="{{ route('account.integrations.edit', $integration->id) }}" class="btn btn-link">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('account.integrations.destroy', $integration->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this Integration?')">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-link"><i class="fa fa-trash"></i> Delete</button>
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
                    <img class="media-object" src="http://placehold.it/64x64" alt="...">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Email</h4>

                    <p>Gummies chocolate bar sugar plum. Oat cake pastry pie. Bear claw dragée cotton candy dessert
                        tiramisu jujubes brownie jujubes. Marshmallow bonbon pudding dragée pudding cupcake sweet.
                        Lollipop macaroon icing biscuit jelly chocolate lemon drops. </p>
                </div>
                <div class="media-right">
                    <a href="{{ route('account.integrations.create') }}?type=email" class="btn btn-cta-primary">Add integration</a>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="http://www5.pcmag.com/media/images/396208-slack-logo.jpg?thumb=y"
                             width="64" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Slack</h4>

                    <p>Create an Incoming WebHook in Slack, selecting which channel to post to. Copy WebHook Url to this slack integration.</p>

                    <p>Gummies chocolate bar sugar plum. Oat cake pastry pie. Bear claw dragée cotton candy dessert
                        tiramisu jujubes brownie jujubes. Marshmallow bonbon pudding dragée pudding cupcake sweet.
                        Lollipop macaroon icing biscuit jelly chocolate lemon drops. </p>
                </div>
                <div class="media-right">
                    <a href="{{ route('account.integrations.create') }}?type=slack" class="btn btn-cta-primary">Add integration</a>
                </div>
            </div>
        </div>
    </section>

@endsection