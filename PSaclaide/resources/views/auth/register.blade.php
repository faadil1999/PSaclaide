@extends('layouts.lay_auth')

@section('main')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">PSaclaid</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Register</h3>
                            <div>

                                <form method="POST" action="{{ route('register') }}" class="signin-form">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name">
                                        </div>
                                    @if ($errors->has('email'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                        <div class="form-group">
                                            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                    @if ($errors->has('password'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input id="password-field" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="w-50">
                                            <label class="checkbox-wrap checkbox-primary">Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="#" style="color: #fff">Forgot Password</a>
                                        </div>
                                    </div>
                                </form>
                                <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                                <div class="social d-flex text-center">
                                    <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                        Facebook</a>
                                    <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                        Twitter</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection