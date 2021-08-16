<div class="md:col-span-1 flex justify-between">
    <div class="border border-gray-200 bg-white rounded-2xl w-full p-2">
        <div class="rounded-lg bg-white h-full px-4 py-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900 px-2">{{ $title }}</h3>

            <p class="pr-4 text-sm text-gray-600">
                {{ $description }}
            </p>
        </div>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
