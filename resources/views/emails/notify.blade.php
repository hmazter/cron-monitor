@extends('emails.layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <p>{!! $text !!}</p>

    <p>
        <a href="{{ route('account.monitors.index') }}" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #50c8c9; text-decoration: underline; margin: 0;">
            View my monitors
        </a>
    </p>
@endsection