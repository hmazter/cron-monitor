@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <h1>My Monitors</h1>

            @if(count($monitors) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Allowed execution time</th>
                    <th>Last pinged</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($monitors as $monitor)
                    <tr>
                        <td>{{ $monitor->stateText }}</td>
                        <td>{{ $monitor->name }}</td>
                        <td>
                            {{ route('run', $monitor->uuid) }}<br>
                            {{ route('complete', $monitor->uuid) }}
                        </td>
                        <td>{{ number_format($monitor->allowed_runtime / 60, 0) }} minutes</td>
                        <td>
                            @if($monitor->pinged_at)
                                @datediff($monitor->pinged_at)
                            @else
                                Never
                            @endif
                        </td>
                        <td>
                            <a href="#" title="edit" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>

                            <form action="{{ route('account.monitors.destroy', $monitor->uuid) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this Monitor?')">
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
                <p class="lead">No Monitors created, start by <a href="{{ route('account.monitors.create') }}">creating a monitor</a>, or <a href="/docs">read the documentation</a></p>
            @endif

            <div class="text-center">
                <a href="{{ route('account.monitors.create') }}" class="btn btn-cta-primary">Create new Monitor</a>
            </div>

        </div>
    </section>

@endsection