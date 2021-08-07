<x-admin-layout>
    <div class="w-4/5">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Permission > Create') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="h-full max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container mx-auto px-4 sm:px-8 py-8">

                        <x-alert></x-alert>

                        <form method="POST" action="{{ route('permission.store') }}">
                            @csrf
                            <div class="mt-4">

                                <x-jet-label for="name" value="Name" />
                                <x-jet-input class="block w-full mt-1" type="text" name="name" :value="old('name')"/>
                                @error('name')
                                    <span class="text-red-900 p-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="modal-open ml-4 ">
                                    {{ __('Create') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
