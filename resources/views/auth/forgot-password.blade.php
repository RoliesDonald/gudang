<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
            type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/login" class="auth-logo">
                                    <img src="{{ asset('backend/assets/images/kampax_light.png') }}" height="30"
                                        class="logo-dark mx-auto" alt="" />
                                    <img src="{{ asset('backend/assets/images/kampax_dark.png') }}" height="30"
                                        class="logo-light mx-auto" alt="" />
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18">
                            <b>Reset Password</b>
                        </h4>

                        <div class="p-3">
                            <form method="POST" action="{{ route('password.email') }}">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Forgot your password? No problem. Just let us know your email address and we will
                                    email you a password reset link that will allow you to choose a new one. <br>
                                    Enter Your <strong>E-mail</strong> and
                                    instructions will be sent to you!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <div class="col-xs-12">
                                            <input id="email" class="form-control block mt-1 w-full" type="email"
                                                name="email" :value="old('email')" required=""
                                                placeholder="Email" />
                                        </div>
                                    </div>

                                    <div class="form-group pb-2 text-center row mt-3">
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100 waves-effect waves-light"
                                                type="submit">
                                                Send Email
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row mt-2 ">
                                        <div class="col-12 mt-3 text-center ">
                                            <a href="{{ route('login') }}" class="text-muted"><i
                                                    class="mdi mdi-account-circle"></i>
                                                Back to login Page</a>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>

</html>

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __(
            'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
        ) }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
