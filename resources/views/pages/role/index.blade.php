<x-admin-layout>
    <div class="w-4/5 min-h-screen">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Role') }}
            </h2>
        </x-slot>

        <x-boxtable>
            <div class="my-2 flex justify-between sm:flex-row flex-col">
                <div class="block relative w-3/4">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <form action="{{ route('role.index') }}" method="get">
                        <input placeholder="Search" name="search"
                        class="appearance-none rounded-full border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </form>
                </div>
                <x-jet-button>
                    <a href="{{ route('role.create') }}" >Add Role</a>
                </x-jet-button>
            </div>
            <div class="pt-4 mx-auto overflow-x-auto">
                <div class="inline-block border min-w-full rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <x-tr>
                                <x-th>
                                    <i class="fas fa-hashtag"></i>
                                </x-th>
                                <x-th>
                                    <i class="fas fa-user-tag mr-1"></i>
                                    Role
                                </x-th>
                                <x-th>
                                    <i class="fas fa-id-badge mr-2"></i>
                                    Permissions
                                </x-th>
                                <x-th>
                                    <i class="fas fa-edit mr-1"></i>
                                    Action
                                </x-th>
                            </x-tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                <x-tr>
                                    <x-td>
                                        <p class="text-gray-900 whitespace-no-wrap ml-3">{{ $loop->iteration }}</p>
                                    </x-td>
                                    <x-td>
                                        <p class="text-gray-900 whitespace-no-wrap ml-3">{{ $item->name }}</p>
                                    </x-td>
                                    <x-td>
                                        <div class=" ml-3">
                                            @foreach ($item->permissions as $permission)
                                            <x-badge>{{ $permission->name }}</x-badge>
                                        @endforeach
                                        </div>
                                    </x-td>
                                    <x-td>
                                        <div class="flex sm:flex-row flex-col w-10 justify-between ml-2">
                                            <a href="{{ route('role.edit', $item->id) }}" class="text-blue-800 flex flex-row items-center">
                                                <i class="fas fa-pen mx-2"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('role.destroy', $item->id) }}" method="post" class="relative inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                            class="text-red-900 flex flex-row items-center"
                                                onclick="return confirm('are you sure?!')">
                                                <i class="fas fa-trash-alt mx-2"></i>
                                                Delete
                                            </button>
                                            </form>
                                        </div>
                                    </x-td>
                                </x-tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div
                        class="px-5 py-5 bg-white flex flex-col xs:flex-row items-center xs:justify-between          ">
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </x-boxtable>
    </div>
</x-admin-layout>

