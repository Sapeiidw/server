{{-- <div class="w-full md:w-1/4 xl:w-1/4 p-6 flex flex-col">
    <div class="hadow-lg hover:grow hover:shadow-xl p-2 bg-gray-400 items-center flex flex-col p-1/4 rounded-md">
        <a href="http://client.domain.test">
            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            <div class="pt-1 flex items-center justify-between">
                <p class="">client</p>

            </div>
        </a>
    </div>
</div>

<div class="w-full md:w-1/4 xl:w-1/4 p-6 flex flex-col">
    <div class=" shadow-sm hover:grow hover:shadow-xl p-2 bg-gray-400 items-center flex flex-col rounded-md">
        <a href="http://client.domain.test">
            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            <div class="pt-1 flex items-center justify-between">
                <p class="">client 2</p>
            </div>
        </a>
    </div>
</div> --}}

<x-clientstyle>
    @slot('title')
    <a href="http://client.domain.test">
        judulunya client
    </a>

    @endslot
    <div class="">
        <a href="http://client.domain.test">
            <img class="bg-white md:h-auto hover:grow  hover:shadow-lg" src="{{ asset('img/undraw_text_files_au1q.svg') }}">
        </a>
    </div>
</x-clientstyle>

<x-clientstyle>
    @slot('title')
        judulunya client 1
    @endslot
    <div class="">
        <a href="http://client.domain.test">
            <img class="bg-white md:h-auto hover:grow hover:shadow-lg" src="{{ asset('img/undraw_text_files_au1q.svg') }}">
        </a>
    </div>
</x-clientstyle>

{{-- <x-app-layout>
    <div class="py-7">
        <div class="max-w-6xl sm:px-6 lg:px-8">
            <div class=" mx-auto flex items-center flex-wrap overflow-hidden">
                <x-clientlayouts/>
            </div>
        </div>
    </div>
</x-app-layout> --}}
