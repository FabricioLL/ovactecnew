@extends('layouts.main', [
    'class' => 'register-page',
    'backgroundImagePath' => 'img/bg/jan-sendereks.jpg'
])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 ml-auto">
                    <div class="info-area info-horizontal mt-10">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-cart-simple"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title mx-3">{{ __('Compras') }}</h5>
                            <p class="description mx-3">
                                {{ __('Entregamos una experiencia de compra entretenida, memorable y única, y nos destacamos por seguir las tendencias de la moda en el mercado.') }}
                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal my-2">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-shop"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title mx-3">{{ __('Marcas') }}</h5>
                            <p class="description mx-3">
                                {{ __('Contamos con un diverso pool de marcas nacionales e internacionales y con una amplia oferta de productos.') }}
                            </p>
                        </div>
                    </div>
                    <div class="info-area info-horizontal my-2">
                        <div class="icon icon-info">
                            <i class="nc-icon nc-satisfied"></i>
                        </div>
                        <div class="description">
                            <h5 class="info-title mx-3">{{ __('Atención de calidad') }}</h5>
                            <p class="description mx-3">
                                {{ __('El orden, la exhibición e innovación, nos permite satisfacer las necesidades de nuestros clientes posicionándonos dentro de sus preferencias.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mr-auto">
                    <div class="card card-signup text-center">
                        <div class="card-header ">
                            <h4 class="card-title">{{ __('Registrarse') }}</h4>
                        </div>
                        <div class="card-body ">
                            <form class="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-single-02"></i>
                                        </span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-email-85"></i>
                                        </span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="Correo electrónico" required value="{{ old('email') }}" required autocomplete="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-key-25"></i>
                                        </span>
                                    </div>
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmar contraseña" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- <div class="form-check text-left">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="agree_terms_and_conditions" type="checkbox">
                                        <span class="form-check-sign"></span>
                                            {{ __('I agree to the') }}
                                        <a href="#something">{{ __('terms and conditions') }}</a>.
                                    </label>
                                    @if ($errors->has('agree_terms_and_conditions'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('agree_terms_and_conditions') }}</strong>
                                        </span>
                                    @endif
                                </div> --}}
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Empezar') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
