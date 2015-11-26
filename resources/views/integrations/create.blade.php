@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <h1>Add {{ ucfirst($type) }} integrations</h1>

            @include('partials.flash')

            {!! Form::open(['route' => 'account.integrations.store', 'method' => 'post']) !!}

            <input type="hidden" name="type" value="{{ $type }}">

            @include('integrations._form', ['submitText' => 'Add integration'])

            {!! Form::close() !!}

        </div>
    </section>

@endsection