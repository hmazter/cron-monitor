@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <h1>Warnings</h1>

            @if(count($warnings) > 0)
                <div class="list-group">
                    @foreach($warnings as $warning)
                        <div class="list-group-item">
                            <p class="list-group-item-text">
                                @if($warning->type == \App\Models\Monitor::STATE_LATE)
                                    Monitor <strong>{{ $warning->monitor->name }}</strong> is running late
                                @else
                                    Unknown error for Monitor <strong>{{ $warning->monitor->name }}</strong>
                                @endif
                            </p>

                            <p class="text-muted">@datediff($warning->created_at)</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="lead">No Warnings, Yey</p>
            @endif

        </div>
    </section>

@endsection