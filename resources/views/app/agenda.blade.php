@extends('app.layout.base')

@section('title', 'Agenda')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/agenda.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/calendar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/query.css') }}" />
@endsection

@section('body')
    <div class="app">
        <button class="button-menu" aria-label="Botão para abrir menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="grid">
            @include('layout.partials.menu')
    
            <main class="main container">
                <h2 class="title">Agenda</h2>
                @include('layout.partials.large-calendar')
            </main>
    
            <aside class="querys container">
                <h3 class="title">Consutas do dia</h3>
    
                @if (count($querys) > 0)
                @component('app.layout.components.query', [
                    'query' => $querys,
                    'hidden' => false,
                ])
                @endcomponent

                @else
                <div class="message-empty">
                    <p class="message-icon">
                        <i class="fa-solid fa-circle-info"></i>
                    </p>
                    <p class="message-text">Sem consultas para hoje!</p>
                </div>
                @endif
            </aside>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('script/menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/large-calendar.js') }}"></script>
@endsection
