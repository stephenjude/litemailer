@if (session('message'))
<div class="mb-4">
    <div class="bg-teal-100 border-l-4 border-teal-500 text-teal-700 p-4" role="alert">
        <p class="font-bold">Success</p>
        <p>{{ session('message') }}</p>
    </div>
</div>
@endif
