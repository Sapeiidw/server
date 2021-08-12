<x-admin-layout>
    <div class="w-4/5">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('User > Create') }}
            </h2>
        </x-slot>
        <x-boxtable>
            <div class="mx-auto px-4 sm:px-8 py-8">
                <x-alert />
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        {{-- <x-jet-label for="email" value="Name" /> --}}
                        <x-jet-input placeholder="Name" class="block w-full mt-1" type="text" name="name" :value="old('name')"/>
                        @error('name')
                            <span class="text-red-900 p-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        {{-- <x-jet-label for="email" value="Email" /> --}}
                        <x-jet-input placeholder="Email" class="block w-full mt-1" type="email" name="email" :value="old('email')" />
                        @error('email')
                            <span class="text-red-900 p-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        {{-- <x-jet-label for="password" :value="__('Password')" /> --}}

                        <x-jet-input placeholder="Password"  id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                        @error('password')
                            <span class="text-red-900 p-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        {{-- <x-jet-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                        <x-jet-input placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    @role('super-admin')
                    <div class="mt-4">
                        <x-jet-label for="role" value="Role" />
                        <select name="role" id="role"
                            class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                            @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <span class="text-red-900 p-2">{{ $message }}</span>
                        @enderror
                    </div>
                    @endrole

                    <x-jet-button type="submit" class="mt-4">Create</x-jet-button>
                </form>
            </div>
        </x-boxtable>
    </div>
</x-admin-layout>
