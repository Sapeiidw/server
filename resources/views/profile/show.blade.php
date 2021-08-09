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
                <strong>
                    Profile Information
                </strong>
                @endslot
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                {{-- <x-jet-section-border /> --}}
            @endif
            </x-stickyprofile>


            <x-stickyprofile>
                @slot('title')
                <strong>
                    Update Password
                </strong>
                @endslot
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
                @endif
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                <strong>
                    Two Factor Authentication
                </strong>
                @endslot
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
                @endif
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                    <strong>
                        Browser Sessions
                    </strong>
                @endslot
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            </x-stickyprofile>

            <x-stickyprofile>
                @slot('title')
                <strong>
                    Delete Account
                </strong>
                @endslot
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </x-stickyprofile>
        </div>

    {{-- </div> --}}
</x-app-layout>
