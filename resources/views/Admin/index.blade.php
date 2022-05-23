@extends('Admin.layout')
@section('content')
    <section id="main-body" class="main-body">
        {{-- TODO: Make card component for card section and make six component for each specific card --}}
        {{-- Cards --}}
        <section class="row">

            <x-AdminPanel.Cards.total-sale></x-AdminPanel.Cards.total-sale>

            <x-AdminPanel.Cards.total-taxs></x-AdminPanel.Cards.total-taxs>

            <x-AdminPanel.Cards.total-after-tax></x-AdminPanel.Cards.total-after-tax>

            <x-AdminPanel.Cards.pure-profit></x-AdminPanel.Cards.pure-profit>
            
            <x-AdminPanel.Cards.total-products></x-AdminPanel.Cards.total-products>

            <x-AdminPanel.Cards.last-time-tax-paied></x-AdminPanel.Cards.last-time-tax-paied>

            <x-AdminPanel.Cards.last-checkout></x-AdminPanel.Cards.last-checkout>

            <x-AdminPanel.Cards.last-tax-checkout></x-AdminPanel.Cards.last-tax-checkout>

        </section>
        {{-- TODO: Make component for user part --}}
        {{-- text Area --}}

        <x-AdminPanel.user-area.user-text-area></x-AdminPanel.user-area.user-text-area>
@endsection
