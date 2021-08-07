<div class="bg-gray-300 min-h-screen flex sm:justify-center items-center">

    <div class="w-full sm:max-w-xl max-h-full px-4 py-4 flex flex-wrap-reverse bg-red-500 shadow-md overflow-hidden justify-center rounded-lg">
        <div class="max-w-full p-6 py-4 bg-white shadow-md overflow-hidden justify-center">
            {{ $slot }}
        </div>
        <div class="ml-auto mr-auto p-4 justify-items-center" >
            {{ $logo }}
        </div>
    </div>

</div>
