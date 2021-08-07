{{-- <div id="sidebar" class="fixed z-40 inset-0 flex-none h-full bg-black bg-opacity-25 w-full lg:bg-white lg:static lg:h-auto lg:overflow-y-visible lg:pt-0 lg:w-60 xl:w-72 lg:block hidden">
<div id="navWrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:bg-transparent overflow-hidden lg:top-18 bg-white mr-24 lg:mr-0"> --}}
<aside class="bg-sidebar bg-gray-800 h-min-full w-1/5 sm:block shadow-xl">
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
