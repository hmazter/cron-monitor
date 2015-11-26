@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Sign up</h2>

                    @include('partials.flash')

                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            Name
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            Email
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            Password
                            <input class="form-control" type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            Confirm password
                            <input class="form-control" type="password" name="password_confirmation"
                                   id="password_confirmation">
                        </div>

                        <button class="btn btn-cta-primary" type="submit">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection