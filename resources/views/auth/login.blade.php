@extends('layouts.web.webBase')

@section('content')
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                        <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form name="frm-login" method="POST" action="{{ route('login') }}">
                                @csrf 
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{ __('Log in to your account') }}</h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">{{ __('Email Address') }}:</label>
                                    <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">{{ __('Password') }}:</label>
                                    <input type="password" id="frm-login-pass" name="password" placeholder="************">
                                </fieldset>
                                
                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input "  id="remember_me" name="remember" value="forever" type="checkbox"><span>{{ __('Remember me') }}</span>
                                    </label>
                                    <a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">{{ __('Forgotten password?') }}</a>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="{{ __('Login') }}" name="submit">
                            </form>
                        </div>												
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
@endsection