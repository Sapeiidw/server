@if (session('success'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('success') }}
    </div>
@endif