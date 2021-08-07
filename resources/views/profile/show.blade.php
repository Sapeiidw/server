<x-app-layout>
    @include('sidebar-profile')
    {{-- < class=""> --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-stickyprofile>
                @slot('title')
                <div>
                    coba aja dulu

                </div>
                @endslot
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                {{-- <x-jet-section-border /> --}}
            @endif
            </x-stickyprofile>


            <x-stickyprofile>
                @slot('title')
                    coba aja dulu 2
                @endslot
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-jet-section-border />
                @endif
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                    coba aja dulu 3
                @endslot
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-jet-section-border />
                @endif
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                    coba aja dulu 4
                @endslot
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                    coba aja dulu 5
                @endslot
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </x-stickyprofile>
        </div>

    {{-- </div> --}}
</x-app-layout>
