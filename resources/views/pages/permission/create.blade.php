<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role > Create') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-8 py-8">

                    <x-alert></x-alert>

                    <form method="POST" action="{{ route('role.store') }}">
                        @csrf

                        <div class="mt-4">
                            <x-jet-label for="name" value="Name" />
                            <x-jet-input class="block w-full mt-1" type="text" name="name" :value="old('name')"/>
                            @error('name')
                                <span class="text-red-900 p-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="permissions" value="permissions" />
                            <select class="block w-full mt-1 js-example-basic-multiple" name="permissions[]" multiple="multiple">
                            </select>
                            @error('permissions')
                                <span class="text-red-900 p-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Create') }}
                            </x-jet-button>
                        </div>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>
</x-app-layout>
