<x-app-layout>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        {{-- <div>
                            <h2 class="text-2xl font-semibold leading-tight">User</h2>
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
                                <form action="{{ route('user.index') }}" method="get">
                                    <input placeholder="Search" name="search"
                                    class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                                </form>
                            </div>
                            <a href="{{ route('user.create') }}" class="py-2 px-3 bg-gray-800 text-white text-sm rounded">Add User</a>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <x-tr>
                                            <x-th>
                                                Name
                                            </x-th>
                                            <x-th>
                                                Email
                                            </x-th>
                                            <x-th>
                                                Created at
                                            </x-th>
                                            <x-th>
                                                Status
                                            </x-th>
                                            <x-th>
                                                Role
                                            </x-th>
                                            <x-th>
                                                Action
                                            </x-th>
                                        </x-tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $item)
                                        <x-tr>
                                            <x-td>
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="{{ $item->profile_photo_url ?? "https://ui-avatars.com/api/?name=".$item->name
                                                            }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        {{ $item->name }}
                                                    </div>
                                                </div>
                                            </x-td>
                                            <x-td>
                                                {{ $item->email }}
                                            </x-td>
                                            <x-td>
                                                {{ $item->created_at }}
                                            </x-td>
                                            <x-td>
                                                @if ($item->email_verified_at)
                                                    <x-badge>Verified</x-badge>
                                                @else
                                                    <x-badge>Not Verivied</x-badge>
                                                @endif
                                            </x-td>
                                            <x-td>
                                                <x-badge>{{ $item->roles->first()->name ?? '?'}}</x-badge>
                                            </x-td>
                                            <x-td>
                                                <div class="flex flex-row w-20 justify-between">
                                                    <a href="{{ route('user.edit',$item->id) }}" class="text-blue-900">Edit</a>
                                                    <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" onclick="return confirm('Are u Sure!!')" class="text-red-900">Delete</button>
                                                    </form>
                                                </div>
                                            </x-td>
                                        </x-tr>    
                                        @empty
                                        <x-tr>
                                            Data gak ada boss
                                            </x-tr> 
                                        @endforelse   
                                    </tbody>
                                </table>
                                <div class="p-2">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    