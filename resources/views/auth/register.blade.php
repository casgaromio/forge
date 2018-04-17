@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')
    <div class="container">
        <div class="auth-pages">
            <div>
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
                <h2>Create Account</h2>
                <div class="spacer"></div>
                <form action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input type="text" id="name" class="form-control" name="name=" value="{{ old('name') }}" placeholder="Name" required autofocus>
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                    <input type="password-confirmation" id="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>

                    <div class="login-container">
                        <button type="submit" class="auth-button">Create Account</button>
                        <div class="already-have-container">
                            <p><strong>Already have an account?</strong></p>
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="auth-right">
                <h2>New Customer</h2>
                <div class="spacer"></div>
                <p><strong>Save time now</strong></p>
                <p>Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences.</p>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>Loyaltu Program</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima distinctio, officiis asperiores illum inventore aperiam, nulla dicta ex temporibus dolorem, obcaecati sunt molestias commodi aliquam eligendi perspiciatis. Ut, nulla!</p>
            </div>
        </div>
    </div>
@endsection
