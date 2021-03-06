@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Perfil</h1>
@stop

@section('content')
<x-app-layout>


    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-gray-200">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())


                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())


                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

            @endif
        </div>
    </div>
</x-app-layout>

@stop




