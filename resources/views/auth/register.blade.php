@extends('layouts.web.webBase')

@section('content')
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">{{ __('home') }}</a></li>
                <li class="item-link"><span>{{ __('Register') }}</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                        <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form-stl" method="POST" action="{{ route('register') }}" name="frm-login">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{ __('Create an account') }}</h3>
                                    <h4 class="form-subtitle">{{ __('Personal infomation') }}</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">{{ __('Name') }} *</label>
                                    <input type="text" id="frm-reg-lname" name=" name" placeholder="Last name*">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">{{ __('Email Address') }} *</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                </fieldset>
                                <fieldset class="wrap-functions ">
                                    <label class="remember-field">
                                        <input name="remember" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
                                    </label>
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{ __('Login Information') }}</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">{{ __('Password') }} *</label>
                                    <input type="text" id="frm-reg-pass" name="password" placeholder="Password">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">{{ __('Confirm Password') }} *</label>
                                    <input type="text" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
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