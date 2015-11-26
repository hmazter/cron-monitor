@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <h1>Edit {{ ucfirst($type) }} integrations</h1>

            {!! Form::model($integration, ['route' => ['account.integrations.update', $integration->id], 'method' => 'put']) !!}

            @include('integrations._form', ['submitText' => 'Save integration'])

            {!! Form::close() !!}

        </div>
    </section>

@endsection