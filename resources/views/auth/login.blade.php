@extends('layouts.main', [
    'class' => 'login-page',
    'backgroundImagePath' => 'img/bg/fabio-mangione.jpg'
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login">
                        <div class="card-header ">
                            <div class="card-header ">
                                <img src="{{asset('/img/logo_ovatec.png')}}" alt="image"/>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo electrónico') }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback mx-4" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Contraseña') }}" type="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback mx-4" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                     <label class="form-check-label">
                                        <input class="form-check-input" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-round mb-3" style="background-color: brown">{{ __('Iniciar sesión') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- <a href="{{ route('password.request') }}" class="btn btn-link" style="color: white">
                    {{ __('Olvide mi contraseña') }}
                </a>
                <a href="{{ route('register') }}" class="btn btn-link float-right" style="color: white">
                    {{ __('Crear cuenta') }}
                </a> --}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
