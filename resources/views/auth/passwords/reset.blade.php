@extends('layout')

@section('title', 'Reset Password')
@section('content')
    <div class="container">
        <div class="auth-pages">
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach  ($errors->all () as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>Reset Password</h2>
            <div class="spacer"></div>
            <form action="{{ route('password.request') }}" class="form-horizontal" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="email" id="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Reset Password</button>
                </div>
            </form>
        </div>
        <div class="auth-right">
            <h2>Reset Password Information</h2>
            <div class="spacer"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus fugiat quas sit atque ut vel laboriosam nihil! Velit, earum totam voluptatibus dignissimos incidunt hic molestiae consequuntur delectus iste, officia a.</p>
            <div class="spacer"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure vitae, provident, velit illo placeat natus nemo sunt esse porro amet possimus, expedita unde facilis tempora consequuntur quaerat ullam autem voluptatibus.</p>
        </div>
    </div>
</div>
