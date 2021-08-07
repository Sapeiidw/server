<div class="w-full flex-col md:w-1/4 xl:w-1/3 sm:items-center sm:justify-center bg-gray-400 rounded-t-3xl rounded-b-3xl  border-gray-800 m-4">
    <div class="sticky top-0 bg-blue-500 rounded-full p-2 text-gray-300 m-2">
        <div class="px-2 items-start justify-center">
            {{ $title }}
        </div>
    </div>
    <div class="flex-none">
        {{ $slot }}

    </div>

</div>

{{-- <div class="w-full md:w-1/4 xl:w-1/4 p-6 flex flex-col">
    <div class=" shadow-sm hover:grow hover:shadow-xl p-2 bg-gray-400 items-center flex flex-col rounded-md">
        <a href="http://client.domain.test">
            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            <div class="pt-1 flex items-center justify-between">
                <p class="">client 2</p>
            </div>
        </a>
    </div>
</div> --}}
