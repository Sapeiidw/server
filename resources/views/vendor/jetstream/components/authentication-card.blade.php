<div class="bg-gray-300 min-h-screen flex sm:justify-center items-center">

    <div class="w-full sm:max-w-xl max-h-full px-4 py-4 flex flex-wrap-reverse bg-blue-400 shadow-md overflow-hidden justify-center rounded-3xl">
        <div class="max-w-full p-6 py-4 flex-none bg-white overflow-hidden justify-center rounded-2xl">
            {{ $slot }}
        </div>
        <div class="ml-auto mr-auto p-4 justify-items-center" >
            {{ $logo }}
        </div>
    </div>

</div>
