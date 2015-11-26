@extends('app')

@section('content')

    <section class="section offset-header offset-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Sign in</h2>

                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            Email
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            Password
                            <input class="form-control" type="password" name="password" id="password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>

                        <button class="btn btn-cta-primary" type="submit">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection