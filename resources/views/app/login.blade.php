@extends ('app.layout.base')

@section ('title', 'login')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />
@endsection

@section ('body')

<div class="app flex">
    <main class="main">
        <h2 class="title">Login</h2>

        <form action="{{ route('site.login') }}" method="POST" id="form">
            @csrf()
            @method('POST')

            @isset($message) 
            <div class="row">
                <p class="error-message">{{ $message }}</p>
            </div>
            @endisset

            <div class="row">
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') ?? '' }}"
                    placeholder="Email" 
                    class="input" />
                
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <input 
                    type="password" 
                    name="password" 
                    value="{{ old('password') ?? '' }}"
                    placeholder="Password" 
                    class="input" />
                
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="row">
                <p class="message">Não tem uma conta? <a href="{{ route('site.register') }}" class="link">Registrar-se</a></p>
            </div>

            <div class="align">
                <input type="submit" class="button" value="Entrar" />
            </div>
        </form>
    </main>
</div>

@endsection
