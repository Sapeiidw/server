<div class="md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="border border-gray-200 px-4 py-5 sm:p-6 bg-white sm:rounded-2xl">
            {{ $content }}
        </div>
    </div>
</div>
