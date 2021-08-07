<aside class="relative bg-sidebar bg-gray-800 h-min-screen w-1/5 sm:block shadow-xl">
    <nav class="text-white text-base font-semibold pt-3">
        <div class="py-3">
            <x-sidelink href="{{ route('user.index') }}" :active="request()->routeIs('user.*')">
                {{ __('User') }}
            </x-sidelink>
        </div>
        <div class="py-3" >
            <x-sidelink href="{{ route('role.index') }}" :active="request()->routeIs('role.*')">
                {{ __('Role') }}
            </x-sidelink>
        </div>
        <div class="py-3">
            <x-sidelink href="{{ route('permission.index') }}" :active="request()->routeIs('permission.*')">
                {{ __('Permission') }}
            </x-sidelink>
        </div>
    </nav>
</aside>
