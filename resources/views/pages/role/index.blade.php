<x-admin-layout>
    <div class="w-4/5 min-h-screen">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Role') }}
            </h2>
        </x-slot>

        <div class="bg-red-500 relative justify-center w-full items-center m-14 ">
            <div class="py-8 bg-gray-900 w-full sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto px-4 sm:px-8">
                        <div class="py-6">
                            {{-- <div>
                                <h2 class="text-2xl font-semibold leading-tight">Role</h2>
                            </div> --}}
                            <div class="my-2 flex justify-between sm:flex-row flex-col">
                                <div class="block relative">
                                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                            <path
                                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                            </path>
                                        </svg>
                                    </span>
                                    <form action="{{ route('role.index') }}" method="get">
                                        <input placeholder="Search" name="search"
                                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                                    </form>
                                </div>
                                <x-jet-button>
                                    <a href="{{ route('role.create') }}" >Add Role</a>
                                </x-jet-button>
                            </div>
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                    <table class="min-w-full leading-normal">
                                        <thead>
                                            <x-tr>
                                                <x-th>
                                                    #
                                                </x-th>
                                                <x-th>
                                                    Role
                                                </x-th>
                                                <x-th>
                                                    Permissions
                                                </x-th>
                                                <x-th>
                                                    Action
                                                </x-th>
                                            </x-tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $item)
                                                <x-tr>
                                                    <x-td>
                                                        <p class="text-gray-900 whitespace-no-wrap">{{ $loop->iteration }}</p>
                                                    </x-td>
                                                    <x-td>
                                                        <p class="text-gray-900 whitespace-no-wrap">{{ $item->name }}</p>
                                                    </x-td>
                                                    <x-td>
                                                        @foreach ($item->permissions as $permission)
                                                            <x-badge>{{ $permission->name }}</x-badge>
                                                        @endforeach
                                                    </x-td>
                                                    <x-td>
                                                        <a href="{{ route('role.edit', $item->id) }}"
                                                            class="relative inline-block bg-indigo-50 rounded-full px-3 py-1 font-semibold text-indigo-900 leading-tight">
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('role.destroy', $item->id) }}" method="post" class="relative inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="relative inline-block bg-red-50 rounded-full px-3 py-1 font-semibold text-red-900 leading-tight"
                                                            onclick="confirm('are you sure?!')">
                                                            Delete
                                                        </button>
                                                        </form>
                                                    </x-td>
                                                </x-tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div
                                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                                        {{ $roles->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
