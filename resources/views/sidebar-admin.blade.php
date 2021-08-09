<aside class="relative bg-sidebar bg-gray-800 h-min-screen w-1/5 sm:block shadow-xl">
    <nav class="text-white text-base font-semibold pt-3">
        <div class="py-3 justify-between">
            <x-sidelink href="{{ route('user.index') }}" :active="request()->routeIs('user.*')">
                <i class="fas fa-user m-2"></i>
                {{ __('User') }}
            </x-sidelink>
        </div>
        <div class="py-3 justify-between" >
            <x-sidelink href="{{ route('role.index') }}" :active="request()->routeIs('role.*')">
                <i class="fas fa-user-tag m-2 mr-1"></i>
                {{ __('Role') }}
            </x-sidelink>
        </div>
        <div class="py-3 justify-between">
            <x-sidelink href="{{ route('permission.index') }}" :active="request()->routeIs('permission.*')">
                <i class="fas fa-id-badge m-2"></i>
                {{ __('Permission') }}
            </x-sidelink>
        </div>
    </nav>
</aside>
