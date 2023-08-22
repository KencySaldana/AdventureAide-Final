@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login_user.css') }}">
@endsection

@section('title-page')
    Login
@endsection


@section('body')
    <section class="user" style="background-image: url('images/bg-3.jpg');">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">
                        ¿No tienes cuenta?
                    </h2>

                    <button class="user_unregistered-signup" id="signup-button">
                        Registrate
                    </button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">¿Ya tienes cuenta?</h2>
                    <button class="user_registered-login" id="login-button">
                        Login
                    </button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Iniciar Sesión</h2>
                    <form class="form_login" method="POST" action="{{ route('login.store') }}" novalidate>
                        @csrf

                        <div class="forms_field">
                            <label>Email</label>
                            <input id="email-login" value="{{ old('email') }}" type="email" name="email" required
                                autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="forms_field">
                            <label>Password</label>
                            <input id="password-login" value="{{ old('password') }}" type="password" name="password"
                                required />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-botones" style="display: flex; justify-content:center;">
                            <input type="submit" value="Enviar" class="botones" />
                        </div>


                    </form>
                </div>

                <div class="user_forms-signup">
                    <h2 class="forms_title">Registro</h2>
                    <form class="form_registro" method="POST" action="{{ route('register.store') }}" novalidate>
                        @csrf
                        <div class="forms_field">
                            <label>Nombre</label>
                            <input id="name" type="text" name="name" required />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="forms_field">
                            <label>Email</label>
                            <input id="email" type="email" name="email" required />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <label>Password</label>
                            <input id="password-register" name="password" type="password" required />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-botones" style="display: flex; justify-content:center;">
                            <input type="submit" value="Crear cuenta" class="botones" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/login_user.js') }}"></script>
@endsection
