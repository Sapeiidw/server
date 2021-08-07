
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('user.index') }}" class="text-indigo-800">User</a> > Edit
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-8 py-8">
                    <x-alert />
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mt-4">
                            <x-jet-label for="email" value="Name" />
                            <x-jet-input class="block w-full mt-1" type="text" name="name" value="{{ $user->name }}"/>
                            @error('name')
                                <span class="text-red-900 p-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="Email" />
                            <x-jet-input class="block w-full mt-1" type="email" name="email" value="{{ $user->email }}" />
                            @error('email')
                                <span class="text-red-900 p-2">{{ $message }}</span>
                            @enderror
                        </div>

                        @role('super-admin')
                        <div class="mt-4">
                            <x-jet-label for="role" value="Role" />
                            <select name="role" id="role"
                                class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                                @foreach ($roles as $role)
                                    <option {{ $user->roles()->find($role->id) ? "selected" : "" }} value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="text-red-900 p-2">{{ $message }}</span>
                            @enderror
                        </div>
                        @endrole

                        <x-jet-button type="submit" class="mt-4">Update</x-jet-button>
                        <x-jet-button type="reset" class="mt-4">Cancel</x-jet-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
